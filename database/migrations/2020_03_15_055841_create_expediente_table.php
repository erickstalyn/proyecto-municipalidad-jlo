<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('expediente', function (Blueprint $table) {
            $table->Increments('id');   // Llave primaria. Por usar 4 bytes tiene disponible 4,294'967,295 datos.
            $table->char('numero', 15); // Numero del expediente que se le da en mesa de partes.
            $table->char('estado', 1);  // Estado actual del expediente. Por ejemplo: ('A': archivado), ('T': en tramite), etc.
            $table->date('fecha');  // Fecha en la que es recibido en mesa de partes.
            $table->unsignedSmallInteger('tramitador_id');  // Persona que esta realizando este tramite.
            $table->unsignedTinyInteger('tramite_id');  // Clase de tramite que esta realizando.
            $table->unsignedInteger('certificado_id')->nullable();  // Certificado por el cual esta realizando el tramite.

            $table->foreign('tramite_id')->references('id')->on('tramite');
            $table->foreign('tramitador_id')->references('id')->on('persona');
            $table->foreign('certificado_id')->references('id')->on('certificado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('expediente');
    }
}
