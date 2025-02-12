<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;


class Invoices extends Component
{
    use WithPagination;

    public $activeTab = 'all';
    public $search = "";

    public const TABS = [
        'all' => 'All Invoices',
        'draft' => 'Draft',
        'outstanding' => 'Outstanding',
        'paid' => 'Paid'
    ];

    
    public function updateSearch()
    {
        $this->search = trim($this->search);
        $this->resetPage();
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetPage();
    }


    public function render()
    {
        $query = Invoice::with('customer');

        if ($this->activeTab !== 'all') {
            $query->where('status', $this->activeTab);
        }

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('invoice_number', 'like', '%' . $this->search . '%') 
                ->orWhere('amount', 'like', '%' . $this->search . '%')
                ->orWhere('status', 'like', '%' . $this->search . '%')
                  ->orWhereHas('customer', function ($q) { 
                      $q->where('email', 'like', '%' . $this->search . '%');
                  });
            });
        }

        $invoices = $query->orderBy('id', 'desc')->paginate(10);
        
        return view('livewire.invoice-dashboard', [
            'invoices' => $invoices,
            'tabs' => self::TABS
        ])->layout('layouts.app');
    }

    public function delete($invoiceId)
    {
        DB::beginTransaction();
        try {
            $invoice = Invoice::findOrFail($invoiceId);
            $invoice->delete();

            DB::commit();
            session()->flash('message', 'Invoice deleted successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Error: ' . $e->getMessage());
        }
    }
}
