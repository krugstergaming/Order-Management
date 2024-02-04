<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shipment;
use Carbon\Carbon;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Shipment::create([
            'PaymentID' => 2,
            'ShipmentDate' => Carbon::now()->format('Y-m-d'),
            'ShipmentAddress' => '123 Main Street',
            'ShipmentStatus' => 'active',
            'TrackingNumber' => 'TRACK124',
        ]);
    }
}
