<?php

namespace Database\Seeders;

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
        // Define an array of order summaries
        $orderSummaries = [
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-01')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-02')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-03')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-04')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-05')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-06')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-07')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-08')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-09')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
            [
                'CustomerID' =>  1,
                'OrderDate' => Carbon::parse('2024-02-10')->format('Y-m-d'),
                'OrderStatus' => 'Confirmed',
            ],
        ];

        // Iterate over the array and create each order summary
        foreach ($orderSummaries as $orderSummaryData) {
            OrderSummary::create($orderSummaryData);
        }
    }
}
