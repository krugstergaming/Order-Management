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
            'FirstName' => 'Franco',
            'LastName' => 'Rosel',
            'Email' => 'francorosel@example.com',
            'Phone' => '09924353830',
            'Address' => '123 Pacamara Street',
        ]);
    }
}
