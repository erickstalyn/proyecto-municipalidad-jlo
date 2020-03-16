<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sector')->insert(array(
            'id' => 1,
            'nombre' => 'Urb. Latina',
            'numero' => 1
        ), array(
            'id' => 2,
            'nombre' => 'Urb. Las flores',
            'numero' => 2
        ));
    }
}
