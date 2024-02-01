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
        Product::create([
            'ProductName' => 'Chicken McDo',
            'Description' => 'Panget ng mix and match',
            'Price' => 99.00,
            'StockQuantity' => 30,
            'Manufacturer' => 'Fairview Terrecces',
            'Category' => 'Food',
            
        ]);
    }
}

