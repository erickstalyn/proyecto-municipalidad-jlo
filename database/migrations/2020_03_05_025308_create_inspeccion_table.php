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
    public function up()
    {
        Schema::create('inspeccion', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->char('estado',1);
            $table->string('observaciones', 600);
            $table->unsignedSmallInteger('inspector_id');
            $table->foreign('inspector_id')->references('id')->on('persona');
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
        Schema::dropIfExists('inspeccion');
    }
}
