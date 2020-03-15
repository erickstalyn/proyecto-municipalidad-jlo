<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleRiesgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('detalle_riesgo', function (Blueprint $table) {
            $table->unsignedSmallInteger('establecimiento_id'); // Llave foranea. Sirve para saber que riesgo0 tiene este establecimiento
            $table->unsignedTinyInteger('riesgo_id');   // Llave foranea. Sirve para saber que establecimiento tiene este riesgo

            $table->primary(['establecimiento_id', 'riesgo_id']);   // Llave primaria.

            $table->foreign('establecimiento_id')->references('id')->on('establecimiento');
            $table->foreign('riesgo_id')->references('id')->on('riesgo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('detalle_riesgo');
    }
}
