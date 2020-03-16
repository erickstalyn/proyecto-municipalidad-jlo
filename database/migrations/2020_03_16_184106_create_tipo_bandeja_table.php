<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoBandejaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tipo_bandeja', function (Blueprint $table) {
            $table->tinyIncrements('id');   // Llave primaria. Por usar 1 byte y ser sin signo tiene disponible 255 datos.
            $table->string('nombre', 50);   // Nombre. Por ejemplo: 'ENTRADA', 'RECEPCION', 'TRAMITE', 'ARCHIVADO', 'SALIDA'.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tipo_bandeja');
    }
}
