<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'orderitems';
    protected $primaryKey = 'OrderItemID';

    public function order()
    {
        return $this->belongsTo(OrderSummary::class, 'OrderID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'ShipmentID');
    }
}
