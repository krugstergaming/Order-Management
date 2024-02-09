<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderSummary;
use Carbon\Carbon;

class OrderSumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        OrderSummary::create([
            'CustomerID' => 1,
            'OrderDate' => Carbon::now()->format('Y-m-d'),
            'OrderStatus' => 'Processing',
        ]);
    }
}
