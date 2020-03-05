<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimiento', function (Blueprint $table) {
            $table->smallIncrements('id'); // usa 2 bytes - máximo 32767 datos
            $table->string('direccion', 380);
            $table->char('codigo', 4)->nullable();
            $table->string('tipo', 60)->nullable();
            $table->smallInteger('area')->nullable();
            $table->unsignedSmallInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimiento');
    }
}
