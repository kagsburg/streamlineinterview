<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('patients')->insert([
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@gmail.com',
                'address' => 'Kampala',
                'nin' => '123456789',
                'occupation_place' => 'Kampala',
                'occupation_status' => 'Employed',
                'emergency_contact_name' => 'Jane Doe',
                'emergency_contact' => '0788888888',
                'created_by' => '1',
                'updated_by' => '1',
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@gmail.com',
                'address' => 'Kampala',
                'nin' => '123456789',
                'occupation_place' => 'Kampala',
                'occupation_status' => 'Employed',
                'emergency_contact_name' => 'John Doe',
                'emergency_contact' => '0788888888',
                'created_by' => '1',
                'updated_by' => '1',
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Doe',
                'email' => 'james@gmail.com',
                'address' => 'Kampala',
                'nin' => '123456789',
                'occupation_place' => 'Kampala',
                'occupation_status' => 'Employed',
                'emergency_contact_name' => 'Jane Doe',
                'emergency_contact' => '0788888888',
                'created_by' => '1',
                'updated_by' => '1',
            ],
        );
    }
}
