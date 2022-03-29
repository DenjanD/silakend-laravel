<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\JobUnit;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'nip' => '111111',
                'password' => Hash::make('123'),
                'name' => 'SuperAdmin',
                'address' => 'Home',
                'phone' => '23131321321',
                'email' => 'superadmin@example.com',
                'role_id' => Role::where('level',1)->first()->role_id,
                'unit_id' => JobUnit::first()->unit_id,
            ]
        );
        User::create(
            [
                'nip' => '222222',
                'password' => Hash::make('123'),
                'name' => 'PIC',
                'address' => 'Home',
                'phone' => '23131321321',
                'email' => 'pic@example.com',
                'role_id' => Role::where('level',2)->first()->role_id,
                'unit_id' => JobUnit::first()->unit_id,
            ]
        );
        User::create(
            [
                'nip' => '333333',
                'password' => Hash::make('123'),
                'name' => 'Unit Head',
                'address' => 'Home',
                'phone' => '23131321321',
                'email' => 'unithead@example.com',
                'role_id' => Role::where('level',3)->first()->role_id,
                'unit_id' => JobUnit::first()->unit_id,
            ]
        );
        User::create(
            [
                'nip' => '444444',
                'password' => Hash::make('123'),
                'name' => 'Unit Member',
                'address' => 'Home',
                'phone' => '23131321321',
                'email' => 'unitmember@example.com',
                'role_id' => Role::where('level',4)->first()->role_id,
                'unit_id' => JobUnit::first()->unit_id,
            ]
        );
        User::create(
            [
                'nip' => '555555',
                'password' => Hash::make('123'),
                'name' => 'Driver',
                'address' => 'Home',
                'phone' => '23131321321',
                'email' => 'driver@example.com',
                'role_id' => Role::where('level',5)->first()->role_id,
                'unit_id' => JobUnit::first()->unit_id,
            ]
        );
        User::create(
            [
                'nip' => '666666',
                'password' => Hash::make('123'),
                'name' => 'Officer',
                'address' => 'Home',
                'phone' => '23131321321',
                'email' => 'officecr@example.com',
                'role_id' => Role::where('level',6)->first()->role_id,
                'unit_id' => JobUnit::first()->unit_id,
            ]
        );
    }
}
