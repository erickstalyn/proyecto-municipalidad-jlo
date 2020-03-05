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
    public function up()
    {
        Schema::create('expediente', function (Blueprint $table) {
            $table->char('num', 10)->primary(); // usa 4 bytes. Maximo valor: 2 147 483 647
            $table->char('num_recibo', 20);
            $table->decimal('monto', 8, 4);
            $table->date('created_at');
            $table->unsignedTinyInteger('tipo_expediente_id');
            $table->foreign('tipo_expediente_id')->references('id')->on('tipo_expediente');
            $table->unsignedSmallInteger('tramitador_id');
            $table->foreign('tramitador_id')->references('id')->on('persona');
            $table->char('certificado_num', 20);
            $table->foreign('certificado_num')->references('num')->on('certificado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expediente');
    }
}
