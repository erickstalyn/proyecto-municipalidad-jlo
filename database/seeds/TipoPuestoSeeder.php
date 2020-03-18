<?php

use Illuminate\Database\Seeder;

class TipoPuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tipo_puesto')->create(array(array(
            'nombre' => 'JEFE',
            'nivel' => '1'
        ), array(
            'nombre' => 'SECRETARIA',
            'nivel' => '2'
        )));
    }
}
