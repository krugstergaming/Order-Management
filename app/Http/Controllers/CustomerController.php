<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerIndex()
    {
        $orderItems = OrderItem::with(['order', 'product', 'shipment'])->get();

        return view('customer_order', compact('orderItems'));
    }
}
