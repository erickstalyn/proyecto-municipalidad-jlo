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
            $table->smallIncrements('id'); // Llave primaria. Por usar 2 bytes y ser sin signo tiene disponible 65,535 datos.
            $table->string('direccion', 400);   // Direcion del establecimiento.
            $table->char('codigo', 4)->nullable();  // Codigo del establecimiento que viene en la consulta a la SUNAT.
            $table->string('tipo', 50)->nullable(); // Tipo de establecimiento que viene en la consulta a la SUNAT.
            $table->unsignedSmallInteger('area')->nullable();   // Area del establecimiento en metros cuadrados.
            $table->unsignedSmallInteger('empresa_id'); // Llave foranea. Sirve para saber a que empresa pertenece.
            $table->unsignedTinyInteger('sector_id');   // Llave foranea. Sirve para saber a que sector pertenece el establecimiento.

            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->foreign('sector_id')->references('id')->on('sector');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('establecimiento');
    }
}
