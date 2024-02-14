<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Shipment;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define an array of order items
        $orderItems = [
            [
                'OrderID' =>  19,
                'ProductID' =>  1,
                'ShipmentID' =>  1,
                'PaymentID' =>  1,
                'Quantity' =>  2,
            ],
            [
                'OrderID' =>  15,
                'ProductID' =>  2,
                'ShipmentID' =>  2,
                'PaymentID' =>  2,
                'Quantity' =>  3,
            ],
            [
                'OrderID' =>  13,
                'ProductID' =>  3,
                'ShipmentID' =>  3,
                'PaymentID' =>  3,
                'Quantity' =>  4,
            ],
            [
                'OrderID' =>  11,
                'ProductID' =>  4,
                'ShipmentID' =>  4,
                'PaymentID' =>  4,
                'Quantity' =>  5,
            ],
            
            // ... Add more order item arrays here ...
            // Make sure to adjust the OrderID, ProductID, Quantity, etc., as needed
        ];

        // Iterate over the array and create each order item
        foreach ($orderItems as $item => $orderItemData) {
            $product = Product::findOrFail($orderItemData['ProductID']);
            $orderItemData['Subtotal'] = $product->Price * $orderItemData['Quantity'];
            OrderItem::create($orderItemData);
        }
    }
}
