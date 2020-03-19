<?php

use Illuminate\Database\Seeder;

class TipoCertificadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tipo_certificado')->insert(array(array(
            'descripcion' => 'LICENCIA DE FUNCIONAMIENTO DEFINITIVA',
            'area_id' => 3
        ), array(
            'descripcion' => 'CERTIFICADO DE SEGURIDAD EN DEFENSA CIVIL',
            'area_id' => 2
        ), array(
            'descripcion' => 'CERTIFICADO DE SALUBRIDAD',
            'area_id' => 1
        )));
    }
}
