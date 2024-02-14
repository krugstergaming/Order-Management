<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Customer;
use App\Models\OrderSummary;
use Illuminate\Http\Request;
use Paginator;

class CustomerController extends Controller
{
    public function customerIndexID(?int $customerId=null)
{
    $customerDetails = Customer::where('CustomerID', $customerId)->first();

    $orderItems = OrderItem::with(['order', 'product', 'shipment', 'payment'])
        ->whereHas('order', function ($query) use ($customerId) {
            $query->where('CustomerID', $customerId);
        })
        ->get();

    return view('customer_order', compact('orderItems', 'customerDetails'));
}

public function orderIndexID()
{
    $orderItems = OrderItem::with(['order', 'product', 'shipment', 'payment'])
        ->get();

    return view('ecommerce_orders', compact('orderItems'));
}

public function updateOrderStatus(Request $request, $orderItemId)
{
    $validatedData = $request->validate([
        'status' => 'required|in:' . implode(',', OrderSummary::ORDER_STATUSES),
    ]);

    $orderItem = OrderItem::findOrFail($orderItemId);
    $orderItem->order->update(['OrderStatus' => $validatedData['status']]);
    
    return redirect()->back()->with('message', 'Order status updated successfully');
}

}
