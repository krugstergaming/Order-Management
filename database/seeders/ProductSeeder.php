<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define an array of products
        $products = [
            [
                'ProductName' => 'Chicken McDo',
                'Description' => 'Panget ng mix and match',
                'Price' =>  99.00,
            ],
            [
                'ProductName' => 'Burger King',
                'Description' => 'Classic burger with cheese',
                'Price' =>  89.00,
            ],
            [
                'ProductName' => 'McDonald\'s Deluxe',
                'Description' => 'Large fries and a shake',
                'Price' =>  109.00,
            ],
            [
                'ProductName' => 'KFC Extra Crispy',
                'Description' => 'Extra crispy chicken strips',
                'Price' =>  79.00,
            ],
            [
                'ProductName' => 'Subway Classic Combo',
                'Description' => 'Submarine sandwich with extra sauce',
                'Price' =>  85.00,
            ],
        ];

        // Iterate over the array and create each product
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
