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
            $table->tinyIncrements('id');   // usa 1 byte - maximo 255 datos
            
            $table->char('codigo', 1);
            $table->unsignedTinyInteger('nivel');
            $table->string('descripcion', 100);
            $table->unsignedTinyInteger('grupo_riesgo_id');

            $table->foreign('grupo_riesgo_id')->references('id')->on('grupo_riesgo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riesgo');
    }
}
