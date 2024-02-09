<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use App\Models\Product;

class OrderItemSeeder extends Seeder
{
    public function run()
    {
        // Use the ProductID of the new product (replace 3 with the actual ProductID)
        $newProductId = 3;

        // Find the product by its ID
        $product = Product::find($newProductId);

        if ($product) {
            OrderItem::create([
                'OrderID' => 1,
                'ProductID' => $newProductId,
                'Quantity' => 3,
                'Subtotal' => $product->Price * 3,
            ]);

            $this->command->info("Order item created for ProductID: $newProductId");
        } else {
            // Handle case when product is not found
            $this->command->info("Product with ID $newProductId not found.");
        }
    }
}

// class OrderItemSeeder extends Seeder
// {
//     public function run()
//     {
//         // Find the product by its ID
//         $product = Product::find(3);

//         if ($product) {
//             OrderItem::create([
//                 'OrderID' => 1,
//                 'ProductID' => $GeneratePID,
//                 'Quantity' => 3,
//                 'Subtotal' => $product->Price * 3,
//             ]);
//         } else {
//             // Handle case when product is not found
//             $this->command->info('Product with ID not found.');
//         }

//         // Add more order items if needed
//     }
// }

