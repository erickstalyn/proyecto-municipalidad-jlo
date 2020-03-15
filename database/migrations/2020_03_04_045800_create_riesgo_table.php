<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiesgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('riesgo', function (Blueprint $table) {
            $table->tinyIncrements('id');   // Llave primaria. Por usar 1 byte y ser sin signo tiene disponible 255 datos.
            $table->char('codigo', 1)->unique();  
            $table->unsignedTinyInteger('nivel');   // Nivel. Sirve para diferenciar el nivel de riesgo de cada tipo.
            $table->string('descripcion', 100);     // Descripcion.
            $table->unsignedTinyInteger('grupo_riesgo_id'); // Llave foranea. Sirve para saber a que grupo de riesgo pertenece

            $table->foreign('grupo_riesgo_id')->references('id')->on('grupo_riesgo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('riesgo');
    }
}
