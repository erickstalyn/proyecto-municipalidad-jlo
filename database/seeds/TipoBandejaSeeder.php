<?php

use Illuminate\Database\Seeder;

class TipoBandejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tipo_bandeja')->insert(array(array(
            'id' => 1,
            'nombre' => 'ENTRADA'
        ), array(
            'id' => 2,
            'nombre' => 'RECEPCION'
        ), array(
            'id' => 3,
            'nombre' => 'TRAMITE'
        ), array(
            'id' => 4,
            'nombre' => 'SALIDA'
        ), array(
            'id' => 5,
            'nombre' => 'ARCHIVADO'
        )));
    }
}
