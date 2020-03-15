<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('usuario', function (Blueprint $table) {
            $table->unsignedSmallInteger('puesto_id');  // Llave primaria. Por usar 2 bytes y ser sin signo tiene disponible 65,535 datos.
            $table->string('nombre', 50);   // Nombre de usuario.
            $table->string('usuario', 50)->unique();    // Usuario.
            $table->string('contraseña', 50);   // Contraseña.
            $table->char('ip', 15)->nullable(); // IP del ordenador de donde se esta accediendo a la app. Sirve para permitir solo a esta IP (ordenador) acceder a la app.
            $table->boolean('estado');  // Estado. Sirve para permitir o denegar el acceso del puesto a la app. Por ejemplo: (0: desactivado), (1: activado)

            $table->foreign('puesto_id')->references('id')->on('puesto');
            $table->primary('puesto_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('usuario');
    }
}
