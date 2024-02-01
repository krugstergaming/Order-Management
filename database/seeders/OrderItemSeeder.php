<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $product = Product::find(1); // Fetch the product with ID 1

        OrderItem::create([
            'OrderID' => 1,
            'ProductID' => 1,
            'ShipmentID' => 1,
            'Quantity' => 2,
            'Subtotal' => $product->Price * 2, // Multiply the product price by the quantity
        ]);
    }
}

