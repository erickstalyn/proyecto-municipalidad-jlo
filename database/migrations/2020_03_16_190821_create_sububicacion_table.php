<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSububicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sububicacion', function (Blueprint $table) {
            $table->increments('id');   // Llave primaria. Por usar 4 bytes y ser sin signo tiene disponible 4,294'967,295 datos
            $table->boolean('estado')->default(1);  // Estado. Sirve para saber si esta sub ubicacion es actual o pasada. Por ejemplo: (0: este expediente estuvo en esta bandeja), (1: este expediente esta en esta bandeja actualmente).
            $table->datetime('fecha');  // Fecha en la que este expediente llego a esta bandeja.
            $table->unsignedInteger('ubicacion_id');   // Llave foranea. Sirve para identificar a la ubicacion del expediente al que pertenece.
            $table->unsignedSmallInteger('bandeja_id'); // Llave foranea. Sirve para saber en que bandeja del area donde esta la ubicacion del expediente pertenece.

            $table->foreign('ubicacion_id')->references('id')->on('ubicacion');
            $table->foreign('bandeja_id')->references('id')->on('bandeja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sububicacion');
    }
}
