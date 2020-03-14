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
    public function up() {
        Schema::create('establecimiento', function (Blueprint $table) {
            $table->smallIncrements('id'); // usa 2 bytes - máximo 65,535 datos

            $table->string('direccion', 400);
            $table->char('codigo', 4)->nullable();
            $table->string('tipo', 50)->nullable();
            $table->unsignedSmallInteger('area')->nullable();
            $table->unsignedSmallInteger('empresa_id');
            $table->unsignedTinyInteger('sector_id');

            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->foreign('sector_id')->references('id')->on('sector');
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
