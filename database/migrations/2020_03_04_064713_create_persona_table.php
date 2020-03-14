<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('persona', function (Blueprint $table) {
            $table->smallIncrements('id'); // usa 2 bytes - máximo 65,535 datos

            $table->char('dni', 8);
            $table->string('nombre', 50);
            $table->string('apellido_paterno', 25);
            $table->string('apellido_materno', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
