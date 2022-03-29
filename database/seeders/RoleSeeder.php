<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'name' => 'Superadmin',
                'level' => 1
            ]
        );
        Role::create(
            [
                'name' => 'PIC',
                'level' => 2
            ]
        );
        Role::create(
            [
                'name' => 'Unit Head',
                'level' => 3
            ]
        );
        Role::create(
            [
                'name' => 'Unit Member',
                'level' => 4
            ]
        );
        Role::create(
            [
                'name' => 'Driver',
                'level' => 5
            ]
        );
        Role::create(
            [
                'name' => 'Officer',
                'level' => 6
            ]
        );
    }
}
