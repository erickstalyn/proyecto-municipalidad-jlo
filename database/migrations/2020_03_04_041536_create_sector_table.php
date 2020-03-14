<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sector', function (Blueprint $table) {
            $table->tinyIncrements('id');    // usa 1 byte -  maximo 255 datos

            $table->string('nombre', 100);
            $table->unsignedTinyInteger('numero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sector');
    }
}
