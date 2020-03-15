<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->unsignedTinyInteger('area_id'); // Llave foranea. Sirve para saber a que area pertenece esta configuracion.
            $table->char('grupo_riesgo_codigo', 1)->nullable(); // Codigo del grupo de riesgo. Sirve para saber con que codigo de riesgo esta trabajando esta area.
            
            $table->primary('area_id');
            $table->foreign('area_id')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('configuracion');
    }
}
