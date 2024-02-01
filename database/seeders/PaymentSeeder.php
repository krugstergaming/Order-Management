<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Payment::create([
            'PaymentDate' => Carbon::now()->format('Y-m-d'),
            'PaymentMethod' => 'COD',
            'AmountTotal' => 500.00,
        ]);
    }
}

