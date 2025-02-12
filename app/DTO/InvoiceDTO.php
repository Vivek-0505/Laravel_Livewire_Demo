<?php
namespace App\DTO;

use App\Support\Traits\ArrayToProps;

class InvoiceDTO
{
    use ArrayToProps;

    public $amount;

    public $due_date;
    
    public $customer_id;
    
    public $status;

    public $invoice_number;

}
