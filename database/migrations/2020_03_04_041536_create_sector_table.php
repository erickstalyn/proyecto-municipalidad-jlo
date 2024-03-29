<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sector', function (Blueprint $table) {
            $table->tinyIncrements('id');   // Llave primaria. Por usar 1 byte y ser sin signo tiene disponible 255 datos.
            $table->string('nombre', 100);  // Nombre del sector. Por ejemplo: "Urb. Latina".
            $table->unsignedTinyInteger('numero')->unique();  // Numero de orden del sector, debe ser unico.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sector');
    }
}
