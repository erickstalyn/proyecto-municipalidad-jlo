<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('area')->insert(array(array(
            'id' => 1,
            'nombre' => 'SUB GERENCIA DE LA PROMOCION DE LA SALUD Y SANIDAD'
        ), array(
            'id' => 2,
            'nombre' => 'AREA DE DEFENSA CIVIL'
        ), array(
            'id' => 3,
            'nombre' => 'OFICINA DE LICENCIAS Y AUTORIZACIONES'
        ), array(
            'id' => 4,
            'nombre' => 'MESA DE PARTES'
        ), array(
            'id' => 5,
            'nombre' => 'DESARROLLO ECONOMICO Y SOCIAL'
        )));
    }
}
