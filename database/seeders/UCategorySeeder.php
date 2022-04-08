<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsageCategory;

class UCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsageCategory::create([
            'name' => 'Dinas Luar Kota',
        ]);
    }
}
