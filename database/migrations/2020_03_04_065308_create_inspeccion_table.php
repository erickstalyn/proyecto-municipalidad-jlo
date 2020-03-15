<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('inspeccion', function (Blueprint $table) {
            $table->mediumIncrements('id'); // Llave primaria. Por usar 3 bytes y ser sin signo tiene disponible 2'777,215 datos
            $table->char('estado', 1);  // Estado. Sirve para saber el estado actual de la inspeccion. Por ejemplo: ('A': aprobado, 'D': desaprobado)
            $table->string('observaciones', 600);   // Observacion dada por el inspector.
            $table->unsignedSmallInteger('inspector_id');   // Llave foranea. Sirve para saber que inspector realizo esta inspeccion
            $table->unsignedInteger('certificado_id');  // Llave foranea. Sirve para que certificado se realizo esta inspeccion

            $table->foreign('inspector_id')->references('id')->on('persona');
            $table->foreign('certificado_id')->references('id')->on('certificado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('inspeccion');
    }
}
