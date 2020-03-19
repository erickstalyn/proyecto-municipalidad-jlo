<?php

use Illuminate\Database\Seeder;

class BandejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // BANDEJAS DEL AREA DE SALUBRIDAD
        DB::table('bandeja')->insert(array(array(
            'orden' => 1,
            'tipo_bandeja_id' => 1,
            'area_id' => 1
        ), array(
            'orden' => 2,
            'tipo_bandeja_id' => 2,
            'area_id' => 1
        ), array(
            'orden' => 3,
            'tipo_bandeja_id' => 3,
            'area_id' => 1
        ), array(
            'orden' => 4,
            'tipo_bandeja_id' => 4,
            'area_id' => 1
        ), array(
            'orden' => 5,
            'tipo_bandeja_id' => 5,
            'area_id' => 1
        )));

        // BANDEJAS DEL AREA DE DEFENSA CIVIL
        DB::table('bandeja')->insert(array(array(
            'orden' => 1,
            'tipo_bandeja_id' => 1,
            'area_id' => 2
        ), array(
            'orden' => 2,
            'tipo_bandeja_id' => 2,
            'area_id' => 2
        ), array(
            'orden' => 3,
            'tipo_bandeja_id' => 3,
            'area_id' => 2
        ), array(
            'orden' => 4,
            'tipo_bandeja_id' => 4,
            'area_id' => 2
        ), array(
            'orden' => 5,
            'tipo_bandeja_id' => 5,
            'area_id' => 2
        )));

        // BANDEJAS DEL AREA DE LICENCIAS
        DB::table('bandeja')->insert(array(array(
            'orden' => 1,
            'tipo_bandeja_id' => 1,
            'area_id' => 3
        ), array(
            'orden' => 2,
            'tipo_bandeja_id' => 2,
            'area_id' => 3
        ), array(
            'orden' => 3,
            'tipo_bandeja_id' => 3,
            'area_id' => 3
        ), array(
            'orden' => 4,
            'tipo_bandeja_id' => 4,
            'area_id' => 3
        ), array(
            'orden' => 5,
            'tipo_bandeja_id' => 5,
            'area_id' => 3
        )));

        // BANDEJAS DEL AREA DE MESA DE PARTES
        DB::table('bandeja')->insert(array(array(
            'orden' => 1,
            'tipo_bandeja_id' => 1,
            'area_id' => 4
        ), array(
            'orden' => 2,
            'tipo_bandeja_id' => 2,
            'area_id' => 4
        ), array(
            'orden' => 3,
            'tipo_bandeja_id' => 3,
            'area_id' => 4
        ), array(
            'orden' => 4,
            'tipo_bandeja_id' => 4,
            'area_id' => 4
        ), array(
            'orden' => 5,
            'tipo_bandeja_id' => 5,
            'area_id' => 4
        )));
    }
}
