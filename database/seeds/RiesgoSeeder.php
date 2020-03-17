<?php

use Illuminate\Database\Seeder;

class RiesgoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('riesgo')->create(array(array(
            'nivel' => '1',
            'descripcion' => 'Menor a 100 metros',
            'grupo_riesgo_id' => 1
        )));
    }
}
