<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('persona')->insert(array(array(
            'id' => 1,
            'dni' => '71736657',
            'nombre' => 'Jose Anderson',
            'apellido_paterno' => 'Cespedes',
            'apellido_materno' => 'Diaz'
        ), array(
            'id' => 2,
            'dni' => '74757559',
            'nombre' => 'Erick Stalyn',
            'apellido_paterno' => 'Pacherrez',
            'apellido_materno' => 'Puyen'
        ), array(
            'id' => 3,
            'dni' => '01234567',
            'nombre' => 'Justina Justina',
            'apellido_paterno' => 'Cordova',
            'apellido_materno' => 'McFly'
        ), array(
            'id' => 4,
            'dni' => '76543210',
            'nombre' => 'Sofia',
            'apellido_paterno' => 'Pacherrez',
            'apellido_materno' => 'Cabrejos'
        ), array(
            'id' => 5,
            'dni' => '15975346',
            'nombre' => 'Areliz Verania',
            'apellido_paterno' => 'Chapoñan',
            'apellido_materno' => 'Villalobos'
        ), array(
            'id' => 6,
            'dni' => '46821359',
            'nombre' => 'Iris',
            'apellido_paterno' => 'Sanchez',
            'apellido_materno' => 'Montenegro'
        ), array(
            'id' => 7,
            'dni' => '74132658',
            'nombre' => 'Andrea',
            'apellido_paterno' => 'De la cruz',
            'apellido_materno' => 'Olivares'
        ), array(
            'id' => 8,
            'dni' => '73615249',
            'nombre' => 'Emilia Isobel Euphemia',
            'apellido_paterno' => 'Rose',
            'apellido_materno' => 'Clarke'
        ), array(
            'id' => 9,
            'dni' => '73615249',
            'nombre' => 'Jennifer',
            'apellido_paterno' => 'Shadder',
            'apellido_materno' => 'Lawrence'
        )));
    }
}
