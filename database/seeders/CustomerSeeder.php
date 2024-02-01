<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'FirstName' => 'Daniel  Del',
            'LastName' => 'Rosario',
            'Email' => 'daniel@example.com',
            'Phone' => '09951212342',
            'Address' => '123 PUP Street',
        ]);
    }
}
