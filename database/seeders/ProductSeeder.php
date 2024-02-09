<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $AddProduct = Product::create([
            'ProductName' => 'Shirt Tee',
            'Description' => 'This is a tee',
            'Price' => 999.00,
            'StockQuantity' => 25,
            'Manufacturer' => 'Universal Rubina',
            'Category' => 'Clothes',
        ]);

        $GeneratePID = $AddProduct->id;

        $this->command->info("Generated ID: $GeneratePID");
    }
}

