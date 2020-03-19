<?php

use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('configuracion')->insert(array(array(
            'area_id' => 1,
            'grupo_riesgo_codigo' => 'A'
        ), array(
            'area_id' => 2,
            'grupo_riesgo_codigo' => 'N'
        ), array(
            'area_id' => 3,
            'grupo_riesgo_codigo' => 'A'
        ), array(
            'area_id' => 4,
            'grupo_riesgo_codigo' => 'A'
        )));
    }
}
