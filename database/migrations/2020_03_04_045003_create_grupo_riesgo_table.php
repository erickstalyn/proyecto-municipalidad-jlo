<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoRiesgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('grupo_riesgo', function (Blueprint $table) {
            $table->tinyIncrements('id');   // Llave primaria. Por usar 1 byte y ser sin signo tiene disponible 255 datos.
            $table->char('codigo', 1);  // Codigo. Por ejemplo: "A", "B".
            $table->string('descripcion', 100); // Descripcion. Por ejemplo: "Riesgo por areas", "Riesgo por niveles".
            $table->boolean('estado')->default(1);  // Estado. Cuando un grupo de riesgo es obsoleto entonces de cambia el estado para no ser utilizado mas. Por ejemplo: (0: desactivado), (1: activado).
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('grupo_riesgo');
    }
}
