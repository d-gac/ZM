<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location_service')->insert(array(
            0 =>
                array(
                    'location_id' => 1,
                    'service_id' => 1
                ),
            1 =>
                array(
                    'location_id' => 2,
                    'service_id' => 1
                ),
            2 =>
                array(
                    'location_id' => 3,
                    'service_id' => 1
                ),
            3 =>
                array(
                    'location_id' => 4,
                    'service_id' => 1
                ),
            4 =>
                array(
                    'location_id' => 5,
                    'service_id' => 1
                ),
            5 =>
                array(
                    'location_id' => 6,
                    'service_id' => 1
                ),
            6 =>
                array(
                    'location_id' => 7,
                    'service_id' => 1
                ),
            7 =>
                array(
                    'location_id' => 8,
                    'service_id' => 1
                ),
            8 =>
                array(
                    'location_id' => 9,
                    'service_id' => 1
                ),
            9 =>
                array(
                    'location_id' => 10,
                    'service_id' => 1
                ),
            10 =>
                array(
                    'location_id' => 2,
                    'service_id' => 2
                ),
            11 =>
                array(
                    'location_id' => 2,
                    'service_id' => 3
                ),
            12 =>
                array(
                    'location_id' => 2,
                    'service_id' => 4
                ),
            13 =>
                array(
                    'location_id' => 3,
                    'service_id' => 2
                ),
            14 =>
                array(
                    'location_id' => 3,
                    'service_id' => 3
                ),
            15 =>
                array(
                    'location_id' => 4,
                    'service_id' => 2
                ),
            16 =>
                array(
                    'location_id' => 5,
                    'service_id' => 4
                ),
        ));
    }
}
