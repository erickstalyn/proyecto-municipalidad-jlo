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
            $table->tinyIncrements('id');   // usa 1 bytes - maximo 255 datos
            
            $table->char('codigo', 1);
            $table->string('descripcion', 100);
            $table->boolean('estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_riesgo');
    }
}
