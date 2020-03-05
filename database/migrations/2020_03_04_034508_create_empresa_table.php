<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->smallIncrements('id'); // usa 2 bytes - máximo 32767 datos
            $table->char('ruc', 11)->unique();
            $table->string('razon_social', 350)->unique();
            $table->string('nombre_comercial', 350);
            $table->string('tipo', 200)->nullable();
            $table->string('condicion', 45);
            $table->string('estado', 45);
            $table->string('sector', 300)->nullable();
            $table->date('fecha_inscripcion')->nullable();
            $table->date('inicio_actividades')->nullable();
            $table->json('act_comerciales')->nullable();
            $table->json('repre_legales')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
