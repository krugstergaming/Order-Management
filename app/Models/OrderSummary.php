<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSummary extends Model
{
    use HasFactory;

    protected $table = 'ordersummary';
    protected $primaryKey = 'OrderID';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }
}
