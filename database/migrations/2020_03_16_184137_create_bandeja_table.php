<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandejaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bandeja', function (Blueprint $table) {
            $table->smallIncrements('id');   // Llave primaria. Por usar 2 bytes y ser sin signo tiene disponible 65,535 datos
            $table->unsignedTinyInteger('orden');   // Orden de la bandeja. Sirve para saber cual es la bandeja siguiente.
            $table->unsignedTinyInteger('tipo_bandeja_id'); // Llave foranea. Sirve para saber que tipo de bandeja es.
            $table->unsignedTinyInteger('area_id'); // Llave foranea. Area en la que se encuentra el expediente.

            $table->foreign('tipo_bandeja_id')->references('id')->on('tipo_bandeja');
            $table->foreign('area_id')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('bandeja');
    }
}
