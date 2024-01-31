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
            'ProductName' => 'Chicken Joy',
            'Description' => 'Mahal amp!',
            'Price' => 999.00,
            'StockQuantity' => 25,
            'Manufacturer' => 'Puregold Sta. Mesa',
            'Category' => 'Food',
            
        ]);
    }
}

