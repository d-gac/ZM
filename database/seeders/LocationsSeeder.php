<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(array(
            0 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Rejtana',
                    'number' => '55'
                ),
            1 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Rejtana',
                    'number' => '52'
                ),
            2 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Popiełuszki',
                    'number' => '20A'
                ),
            3 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Popiełuszki',
                    'number' => '19B'
                ),
            4 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Popiełuszki',
                    'number' => '20B'
                ),
            5 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Lwowska',
                    'number' => '16C'
                ),
            6 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Podkarpacka',
                    'number' => '12'
                ),
            7 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Dąbrowskiego',
                    'number' => '85'
                ),
            8 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Dąbrowskiego',
                    'number' => '18'
                ),
            9 =>
                array(
                    'city' => 'Rzeszów',
                    'street' => 'Kościuszki',
                    'number' => '45A'
                ),
        ));
    }
}
