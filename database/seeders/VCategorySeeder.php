<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VehicleCategory;

class VCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleCategory::create([
            'name' => 'SUV',
        ]);

        VehicleCategory::create([
            'name' => 'MPV',
        ]);
    }
}
