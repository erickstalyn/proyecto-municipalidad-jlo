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
            $table->unsignedSmallInteger('establecimiento_id');
            $table->unsignedTinyInteger('riesgo_id');

            $table->primary(['establecimiento_id', 'riesgo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('detalle_riesgo');
    }
}
