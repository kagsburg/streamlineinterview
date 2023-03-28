<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'role_name' => 'Admin',
            'role_description' => 'superadmin',
        ],
        [
            'role_name' => 'Doctor',
            'role_description' => 'doctor',
        ],
        [
            'role_name' => 'Nurse',
            'role_description' => 'nurse',
        ],
        [
            'role_name' => 'Lab Technician',
            'role_description' => 'labtech',
        ],
        [
            'role_name' => 'Pharmacist',
            'role_description' => 'pharmacist',
        ],
        [
            'role_name' => 'Receptionist',
            'role_description' => 'receptionist',
        ],
        [
            'role_name' => 'Accountant',
            'role_description' => 'accountant',
        ]
    );
    }
}
