<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use App\Models\Product;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $product = Product::find(3); // Fetch the product with ID 1

        OrderItem::create([
            'OrderID' => 1,
            'ProductID' => 3,
            'Quantity' => 3,
            'Subtotal' => $product->Price * 3, // Multiply the product price by the quantity
        ]);
    }
}

