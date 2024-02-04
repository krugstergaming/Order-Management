<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // public function customerIndex()
    // {
    //     $orderItems = OrderItem::with(['order', 'product', 'shipment'])->get();

    //     return view('customer_order', compact('orderItems'));
    // }

    public function customerIndex($customerId)
{
    $orderItems = OrderItem::with(['order', 'product', 'shipment'])
        ->whereHas('order', function ($query) use ($customerId) {
            $query->where('CustomerID', $customerId);
        })
        ->get();

    return view('customer_order', compact('orderItems'));
}

}
