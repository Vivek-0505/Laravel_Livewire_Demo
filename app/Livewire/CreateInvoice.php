<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateInvoice extends Component
{
    public $amount;
    public $due_date;
    public $customer_id;
    public $status;
    
    public const STATUSES = [
        'draft' => 'Draft',
        'outstanding' => 'Outstanding',
        'paid' => 'Paid'
    ];

    protected $rules = [
        'amount' => 'required|numeric|min:0.01',
        'due_date' => 'required|date',
        'customer_id' => 'required|exists:customers,id',
        'status' => 'required|in:draft,outstanding,paid',
    ];

    public function save()
    {

        
    $validatedData = $this->validate();
    $validatedData['invoice_number'] = 'INV-' . rand(10000, 99999);
    $validatedData['due_date'] = Carbon::parse($validatedData['due_date'])->format('Y-m-d');

       DB::beginTransaction();
       try{
        
        Invoice::create($validatedData);
        DB::commit();
        session()->flash('message', 'Invoice created successfully!');

        return redirect()->route('invoices.index');
       } catch (\Exception $e){
        DB::rollback();
        dd($e->getMessage());
       }

        
    }

    public function render()
    {
        return view('livewire.create-invoice', [
            'customers' => Customer::all(),
            'statuses' => self::STATUSES
        ])->layout('layouts.app');
    }
}

