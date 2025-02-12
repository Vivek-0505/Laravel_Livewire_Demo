<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'invoice_number', 'amount', 'status','due_date'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('M d, g:i A');
    }

    public function getFormattedDueDateAttribute()
    {
        return Carbon::parse($this->due_date)->format('M d, g:i A');
    }
}
