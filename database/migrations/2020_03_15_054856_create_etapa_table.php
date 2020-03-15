<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('etapa', function (Blueprint $table) {
            $table->smallIncrements('id');  // Llave primaria. Por usar 2 bytes y ser sin signo tiene disponible 65,535 datos.
            $table->unsignedTinyInteger('orden');   // Orden en el proceso de este tramite.
            $table->unsignedTinyInteger('tiempo_maximo')->nullable();   // Tiempo maximo que puede estar un expediente en esta area por este tramite.
            $table->unsignedTinyInteger('area_id'); // Llave foranea. Sirve para saber a que area pertenece esta etapa.
            $table->unsignedTinyInteger('tramite_id');  // Llave foranea. Sirve para saber a que tramite pertenece.

            $table->foreign('area_id')->references('id')->on('area');
            $table->foreign('tramite_id')->references('id')->on('tramite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('etapa');
    }
}
