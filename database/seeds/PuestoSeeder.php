<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $datetime_today = Carbon::now('America/Lima')->toDateTimeString();

        //PUESTOS DE SALUBRIDAD
        DB::table('puesto')->insert(array(array(
            'id' => 1,
            'persona_id' => 1,
            'tipo_puesto_id' => 1,
            'area_id' => 1,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        ), array(
            'id' => 2,
            'persona_id' => 9,
            'tipo_puesto_id' => 2,
            'area_id' => 1,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        )));

        //PUESTOS DE DEFENSA CIVIL
        DB::table('puesto')->insert(array(array(
            'id' => 3,
            'persona_id' => 7,
            'tipo_puesto_id' => 1,
            'area_id' => 2,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        ), array(
            'id' => 4,
            'persona_id' => 6,
            'tipo_puesto_id' => 2,
            'area_id' => 2,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        )));

        //PUESTOS DE LICENCIAS
        DB::table('puesto')->insert(array(array(
            'id' => 5,
            'persona_id' => 2,
            'tipo_puesto_id' => 1,
            'area_id' => 3,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        ), array(
            'id' => 6,
            'persona_id' => 4,
            'tipo_puesto_id' => 2,
            'area_id' => 3,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        )));

        //PUESTOS DE GERENCIA ECONOMICA Y SOCIAL
        DB::table('puesto')->insert(array(array(
            'id' => 7,
            'persona_id' => 5,
            'tipo_puesto_id' => 1,
            'area_id' => 5,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        ), array(
            'id' => 8,
            'persona_id' => 8,
            'tipo_puesto_id' => 2,
            'area_id' => 5,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        )));

        //PUESTOS DE MESA DE PARTES
        DB::table('puesto')->insert(array(array(
            'id' => 9,
            'persona_id' => 3,
            'tipo_puesto_id' => 1,
            'area_id' => 4,
            'estado' => 'F',
            'fecha_entrada' => $datetime_today
        )));
    }
}
