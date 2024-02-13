<?php

namespace Database\Seeders;

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
        // Define an array of shipments
        $shipments = [
            [
                'ShipmentDate' => Carbon::parse('2024-02-01')->format('Y-m-d'),
                'ShipmentAddress' => '123 Main Street',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP123',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-02')->format('Y-m-d'),
                'ShipmentAddress' => '456 Market St',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP124',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-03')->format('Y-m-d'),
                'ShipmentAddress' => '789 Pine St',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP125',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-04')->format('Y-m-d'),
                'ShipmentAddress' => '101 Cherry St',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP126',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-05')->format('Y-m-d'),
                'ShipmentAddress' => '123 Oak Ave',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP127',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-06')->format('Y-m-d'),
                'ShipmentAddress' => '456 Maple Dr',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP128',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-07')->format('Y-m-d'),
                'ShipmentAddress' => '789 Elm St',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP129',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-08')->format('Y-m-d'),
                'ShipmentAddress' => '101 Willow Ln',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP130',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-09')->format('Y-m-d'),
                'ShipmentAddress' => '123 Birch Blvd',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP131',
            ],
            [
                'ShipmentDate' => Carbon::parse('2024-02-10')->format('Y-m-d'),
                'ShipmentAddress' => '456 Cedar Ct',
                'ShipmentStatus' => 'active',
                'TrackingNumber' => 'SHIP132',
            ],
        ];

        // Iterate over the array and create each shipment
        foreach ($shipments as $shipmentData) {
            Shipment::create($shipmentData);
        }
    }
}
