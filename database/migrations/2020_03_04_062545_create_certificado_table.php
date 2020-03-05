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
    public function up()
    {
        Schema::create('certificado', function (Blueprint $table) {
            // $table->increments('id'); // usa 4 bytes. Maximo valor: 2 147 483 647
            $table->char('num',20)->primary();
            $table->date('fecha_expedicion');
            $table->char('estado',1);
            $table->unsignedTinyInteger('tipo_certificado_id');
            $table->foreign('tipo_certificado_id')->references('id')->on('tipo_certificado');
            $table->unsignedSmallInteger('establecimiento_id');
            $table->foreign('establecimiento_id')->references('id')->on('establecimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificado');
    }
}
