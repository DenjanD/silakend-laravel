<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobUnit;

class JobUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobUnit::create([
            'name' => 'Unit Test',
            'unit_account' => 'EXP-01'
        ]);
    }
}
