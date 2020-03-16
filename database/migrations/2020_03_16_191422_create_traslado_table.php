<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasladoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('traslado', function (Blueprint $table) {
            $table->string('observacion', 350)->nullable(); // Observacion que manda el area de origen al area de destino.
            $table->unsignedTinyInteger('area_origen_id');  // Llave primaria y foranea. Area de la que vino el expediente
            $table->unsignedTinyInteger('area_destino_id'); // Llave primaria y foranea. Area a la que de derivara el expediente.

            $table->foreign('area_origen_id')->references('id')->on('area');
            $table->foreign('area_destino_id')->references('id')->on('area');

            $table->primary(['area_origen_id', 'area_destino_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('traslado');
    }
}
