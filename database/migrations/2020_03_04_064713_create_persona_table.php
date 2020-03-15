<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('persona', function (Blueprint $table) {
            $table->smallIncrements('id');  // Llave primaria. Por usar 2 bytes y ser sin signo tiene disponible 65,535 datos.
            $table->char('dni', 8); // DNI.
            $table->string('nombre', 50);   // Nombre.
            $table->string('apellido_paterno', 25); // Apellido paterno.
            $table->string('apellido_materno', 25); // Apellido materno.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('persona');
    }
}
