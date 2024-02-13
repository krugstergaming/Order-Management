<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define an array of customers
        $customers = [
            [
                'FirstName' => 'Franco',
                'LastName' => 'Rosel',
                'Email' => 'francorosel@example.com',
                'Phone' => '09924353830',
                'Address' => '123 Pacamara Street',
            ],
            [
                'FirstName' => 'John',
                'LastName' => 'Doe',
                'Email' => 'johndoe@example.com',
                'Phone' => '09924353831',
                'Address' => '456 Example Lane',
            ],
            [
                'FirstName' => 'Jane',
                'LastName' => 'Smith',
                'Email' => 'janesmith@example.com',
                'Phone' => '09924353832',
                'Address' => '789 Elm Street',
            ],
            [
                'FirstName' => 'Bob',
                'LastName' => 'Johnson',
                'Email' => 'bobjohnson@example.com',
                'Phone' => '09924353833',
                'Address' => '101 Maple Drive',
            ],
            [
                'FirstName' => 'Alice',
                'LastName' => 'Williams',
                'Email' => 'alicewilliams@example.com',
                'Phone' => '09924353834',
                'Address' => '123 Oak Avenue',
            ],
        ];

        // Iterate over the array and create each customer
        foreach ($customers as $customerData) {
            Customer::create($customerData);
        }
    }
}