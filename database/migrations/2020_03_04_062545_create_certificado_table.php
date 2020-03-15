<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('certificado', function (Blueprint $table) {
            $table->increments('id');   // Llave primaria. Por usar 4 bytes y ser sin signo tiene disponible . Maximo valor: 2,294'967,295
            $table->char('numero', 6);  // Numero. Por ejemplo: "  4564", " 45165".
            $table->date('fecha_expedicion');   // Fecha de expedicion. Es la fecha en la que el tramite para este certificado termina.
            $table->char('estado', 1);  // Estado. Sirve para saber en que estado se encuentra actualmente. Por ejemplo: ('0': vencido), ('1': vigencia).
            $table->unsignedTinyInteger('tipo_certificado_id'); // Llave foranea. Sirve para saber a que tipo_certificado pertenece.
            $table->unsignedSmallInteger('establecimiento_id'); // Llave foranea. Sirve para saber a que establecimiento pertenece.
            
            $table->foreign('tipo_certificado_id')->references('id')->on('tipo_certificado');
            $table->foreign('establecimiento_id')->references('id')->on('establecimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('certificado');
    }
}
