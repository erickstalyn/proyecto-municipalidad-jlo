<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoPuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tipo_puesto', function (Blueprint $table) {
            $table->tinyIncrements('id');   // Llave primaria. Por usar 1 byte y ser sin signo tiene disponible 255 datos.
            $table->string('nombre', 50);   // Nombre. 
            $table->unsignedtinyInteger('nivel');   // Nivel. Sirve para saber el nivel de acceso que tiene este tipo de puesto con respecto al sistema.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tipo_puesto');
    }
}
