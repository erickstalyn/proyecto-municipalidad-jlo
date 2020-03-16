<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->increments('id');   // Llave primaria. Por usar 4 bytes y ser sin signo tiene disponible 4,294'967,295 datos
            $table->boolean('estado')->default(1);  // Estado. Sirve para saber si esta ubicacion es actual o pasada. Por ejemplo: (0: este expediente estuvo aqui), (1: este expediente esta en esta area actualmente).
            $table->unsignedTinyInteger('tiempo_maximo')->nullable();   // Tiempo maximo que puede estar este expediente en esta area.
            $table->unsignedInteger('expediente_id');   // Llave foranea. Sirve para identificar al expediente al que pertenece.
            $table->unsignedTinyInteger('area_id'); // Llave foranea. Area en la que se encuentra el expediente.

            $table->foreign('expediente_id')->references('id')->on('expediente');
            $table->foreign('area_id')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('ubicacion');
    }
}
