<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //USUARIOS DE SALUBRIDAD
        DB::table('usuario')->insert(array(array(
            'puesto_id' => 1,
            'nombre' => 'Jose',
            'usuario' => 'jose',
            'contraseña' => bcrypt('jose')
        ), array(
            'puesto_id' => 2,
            'nombre' => 'Jennifer',
            'usuario' => 'jennifer',
            'contraseña' => bcrypt('jennifer')
        )));

        //USUARIOS DE DEFENSA CIVIL
        DB::table('usuario')->insert(array(array(
            'puesto_id' => 3,
            'nombre' => 'Andrea',
            'usuario' => 'andrea',
            'contraseña' => bcrypt('andrea')
        ), array(
            'puesto_id' => 4,
            'nombre' => 'Iris',
            'usuario' => 'iris',
            'contraseña' => bcrypt('iris')
        )));

        //USUARIOS DE LICENCIAS
        DB::table('usuario')->insert(array(array(
            'puesto_id' => 5,
            'nombre' => 'Stalyn',
            'usuario' => 'stalyn',
            'contraseña' => bcrypt('stalyn')
        ), array(
            'puesto_id' => 6,
            'nombre' => 'Sofia',
            'usuario' => 'sofia',
            'contraseña' => bcrypt('sofia')
        )));

        //USUARIOS DE GERENCIA ECONOMICA Y SOCIAL
        DB::table('usuario')->insert(array(array(
            'puesto_id' => 7,
            'nombre' => 'Areliz',
            'usuario' => 'areliz',
            'contraseña' => bcrypt('areliz')
        ), array(
            'puesto_id' => 8,
            'nombre' => 'Emilia',
            'usuario' => 'emilia',
            'contraseña' => bcrypt('emilia')
        )));

        //USUARIOS DE MESA DE PARTES
        DB::table('usuario')->insert(array(array(
            'puesto_id' => 9,
            'nombre' => 'Justina',
            'usuario' => 'justina',
            'contraseña' => bcrypt('justina')
        )));
    }
}
