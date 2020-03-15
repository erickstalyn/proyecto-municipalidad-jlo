<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCertificadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tipo_certificado', function (Blueprint $table) {
            $table->tinyIncrements('id');   // Llave primaria. Por usar 1 byte y ser sin signo entonces tiene disponible 255 datos
            $table->string('descripcion', 50);  // Descripcion. Por ejemplo: "LICENCIA DE FUNCIONAMIENTO DEFINITIVA", "CERTIFICADO EN SEGURIDAD DE DEFENSA CIVIL".
            $table->unsignedTinyInteger('area_id'); // Llave foranea. Sirve para saber a que area pertenece este certificado.
            
            $table->foreign('area_id')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tipo_certificado');
    }
}
