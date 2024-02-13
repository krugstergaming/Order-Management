<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSummary extends Model
{
    use HasFactory;

    protected $table = 'r_ordersummary';
    protected $primaryKey = 'OrderID';
    protected $fillable = ['OrderStatus'];
    const ORDER_STATUSES = ['Confirmed', 'Processing', 'Shipping', 'In-Delivery', 'Received', 'Returned'];


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }
}
