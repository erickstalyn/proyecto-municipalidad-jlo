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
        // RIESGOS POR AREAS
        DB::table('riesgo')->insert(array(array(
            'nivel' => '1',
            'descripcion' => 'Menor a 100 metros',
            'grupo_riesgo_id' => 1
        ), array(
            'nivel' => '2',
            'descripcion' => 'Mayor a 100 metros',
            'grupo_riesgo_id' => 1
        )));

        //RIESGOS POR NIVELES
        DB::table('riesgo')->insert(array(array(
            'nivel' => '1',
            'descripcion' => 'Riesgo Bajo',
            'grupo_riesgo_id' => 2
        ), array(
            'nivel' => '2',
            'descripcion' => 'Riesgo Medio',
            'grupo_riesgo_id' => 2
        ), array(
            'nivel' => '3',
            'descripcion' => 'Riesgo Alto',
            'grupo_riesgo_id' => 2
        ), array(
            'nivel' => '4',
            'descripcion' => 'Riesgo Muy Alto',
            'grupo_riesgo_id' => 2
        )));
    }
}
