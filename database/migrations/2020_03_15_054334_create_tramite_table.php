<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tramite', function (Blueprint $table) {
            $table->tinyIncrements('id');   // Llave primaria. Por usar 1 byte tiene disponible 255 datos.
            $table->string('descripcion', 50);  // Descripcion.
            $table->json('requisito');  // Requisitos para realizar este tramite.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tramite');
    }
}
