<?php

use Illuminate\Database\Seeder;

class EtapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // PARA EL TRAMITE DE LICENCIAS
        DB::table('etapa')->insert(array(array(
            'tramite_id' => 1,
            'area_id' => 4,
            'orden' => 1
        ), array(
            'tramite_id' => 1,
            'area_id' => 3,
            'orden' => 2
        ), array(
            'tramite_id' => 1,
            'area_id' => 2,
            'orden' => 3
        ), array(
            'tramite_id' => 1,
            'area_id' => 5,
            'orden' => 4
        ), array(
            'tramite_id' => 1,
            'area_id' => 2,
            'orden' => 5
        ), array(
            'tramite_id' => 1,
            'area_id' => 3,
            'orden' => 6
        ), array(
            'tramite_id' => 1,
            'area_id' => 5,
            'orden' => 7
        ), array(
            'tramite_id' => 1,
            'area_id' => 3,
            'orden' => 8
        )));

        // PARA EL TRAMITE APERTURA DE SALUBRIDAD
        DB::table('etapa')->insert(array(array(
            'tramite_id' => 2,
            'area_id' => 4,
            'orden' => 1
        ), array(
            'tramite_id' => 2,
            'area_id' => 1,
            'orden' => 2
        ), array(
            'tramite_id' => 2,
            'area_id' => 5,
            'orden' => 3
        ), array(
            'tramite_id' => 2,
            'area_id' => 1,
            'orden' => 4
        )));

        // PARA EL TRAMITE RENOVACION DE SALUBRIDAD
        DB::table('etapa')->insert(array(array(
            'tramite_id' => 3,
            'area_id' => 4,
            'orden' => 1
        ), array(
            'tramite_id' => 3,
            'area_id' => 1,
            'orden' => 2
        ), array(
            'tramite_id' => 3,
            'area_id' => 5,
            'orden' => 3
        ), array(
            'tramite_id' => 3,
            'area_id' => 1,
            'orden' => 4
        )));

        // PARA EL TRAMITE APERTURA DE DEFENSA CIVIL
        DB::table('etapa')->insert(array(array(
            'tramite_id' => 4,
            'area_id' => 4,
            'orden' => 1
        ), array(
            'tramite_id' => 4,
            'area_id' => 2,
            'orden' => 2
        ), array(
            'tramite_id' => 4,
            'area_id' => 5,
            'orden' => 3
        ), array(
            'tramite_id' => 4,
            'area_id' => 2,
            'orden' => 4
        )));

        // PARA EL TRAMITE RENOVACION DE DEFENSA CIVIL
        DB::table('etapa')->insert(array(array(
            'tramite_id' => 5,
            'area_id' => 4,
            'orden' => 1
        ), array(
            'tramite_id' => 5,
            'area_id' => 2,
            'orden' => 2
        ), array(
            'tramite_id' => 5,
            'area_id' => 5,
            'orden' => 3
        ), array(
            'tramite_id' => 5,
            'area_id' => 2,
            'orden' => 4
        )));
    }
}
