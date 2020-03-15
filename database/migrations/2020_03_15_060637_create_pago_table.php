<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pago', function (Blueprint $table) {
            $table->Increments('id');   // Llave primaria. Por usar 4 bytes y ser sin signo tiene disponible 4,294'967,295 datos.
            $table->decimal('monto', 9, 2); // Monto del pago realizado.
            $table->string('recibo_numero', 20)->nullable();    // Numero del recibo que verifique el pago hecho.
            $table->date('fecha');  // Fecha en la que se realizo el pago.
            $table->unsignedInteger('expediente_id');   // Numero de expediente por el que se realizo este pago.

            $table->foreign('expediente_id')->references('id')->on('expediente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pago');
    }
}
