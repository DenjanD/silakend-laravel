<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use App\Models\VehicleCategory;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
            'name' => 'Toyota Avanza',
            'year' => '2012',
            'tax_date' => today(),
            'valid_date' => today(),
            'license_number' => 'D 64 HL',
            'distance_count' => 5000,
            'vcategory_id' => VehicleCategory::where('name','MPV')->first()->vcategory_id
        ]);

        Vehicle::create([
            'name' => 'Toyota Fortuner',
            'year' => '2021',
            'tax_date' => today(),
            'valid_date' => today(),
            'license_number' => 'D 46 HL',
            'distance_count' => 5000,
            'vcategory_id' => VehicleCategory::where('name','SUV')->first()->vcategory_id
        ]);
    }
}
