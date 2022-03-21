<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(array(
            0 =>
                array(
                    'service' => 'Telefon',
                    'description' => 'Oferta na telefon'
                ),
            1 =>
                array(
                    'service' => 'Internet',
                    'description' => 'Internet światłowodowy'
                ),
            2 =>
                array(
                    'service' => 'TV + Internet',
                    'description' => 'Pakiet TV i internetu'
                ),
            3 =>
                array(
                    'service' => 'TV',
                    'description' => 'Oferta telewizji'
                ),
        ));
    }
}
