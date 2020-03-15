<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('puesto', function (Blueprint $table) {
            $table->smallIncrements('id');  // Llave primaria. Por usar 2 bytes y ser sin signo tiene disponible 65,535 datos.
            $table->unsignedTinyInteger('tipo_puesto_id');  // Llave foranea. Sirve para saber a que tipo de puesto es.
            $table->unsignedSmallInteger('persona_id'); // Llave foranea. Sirve para saber que persona realiza este cargo.
            $table->unsignedTinyInteger('area_id'); // Llave foranea. Sirve para saber a que area pertenece este puesto.
            $table->char('estado', 1);  // Estado. Sirve para saber el estado actual del puesto. Por ejemplo: ('F': en funcion), ('D': despedido), ('V': vacaciones), ('S': suspendido), ('R': ha renunciado).
            $table->date('fecha_entrada');  // Fecha en la que la persona entro a trabajar en este puesto.
            $table->date('fecha_salida')->nullable();   // Fecha en la que la persona salio de este puesto.

            $table->foreign('tipo_puesto_id')->references('id')->on('tipo_puesto');
            $table->foreign('persona_id')->references('id')->on('persona');
            $table->foreign('area_id')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('puesto');
    }
}
