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
    public function up() {
        Schema::create('empresa', function (Blueprint $table) {
            $table->smallIncrements('id'); // Llave primaria. Por usar 2 bytes y ser sin signo tiene disponible 65,535 datos.
            $table->char('ruc', 11)->unique();  // RUC de la empresa.
            $table->string('razon_social', 350)->unique();  //Razon social de la empresa.
            $table->string('nombre_comercial', 350);    // Nombre comercial de la empresa.
            $table->string('tipo', 200)->nullable();    // Tipo de empresa.
            $table->string('condicion', 45);    // Condicion.
            $table->string('estado', 45);   // Estado.
            $table->string('sector', 300)->nullable();  // Sector al que pertenece.
            $table->date('fecha_inscripcion')->nullable();  // Fecha de inscripcion en la SUNAT.
            $table->date('inicio_actividades')->nullable(); // Fecha de inicio de actividades.
            $table->json('act_comerciales')->nullable();    // Actividades comerciales.
            $table->json('repre_legales')->nullable();  // Representantes legales.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('empresa');
    }
}
