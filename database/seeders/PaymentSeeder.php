<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use Carbon\Carbon;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define an array of payments
        $payments = [
            [
                'PaymentDate' => Carbon::parse('2024-02-01')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-02')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-03')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-04')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-05')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-06')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-07')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-08')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-09')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
            [
                'PaymentDate' => Carbon::parse('2024-02-10')->format('Y-m-d'),
                'PaymentMethod' => 'E-payment',
            ],
        ];

        // Iterate over the array and create each payment
        foreach ($payments as $paymentData) {
            Payment::create($paymentData);
        }
    }
}
