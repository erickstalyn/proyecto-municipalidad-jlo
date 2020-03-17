<?php

use Illuminate\Database\Seeder;

class GrupoRiesgoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('grupo_riesgo')->create(array(array(
            'id' => 1,
            'codigo' => 'A',
            'descripcion' => 'Riesgos por areas',
        ), array(
            'id' => 2,
            'codigo' => 'N',
            'descripcion' => 'Riesgos por niveles',
        )));
    }
}
