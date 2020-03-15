<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandejaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bandeja', function (Blueprint $table) {
            $table->Increments('id');   // Llave primaria. Por usar 4 bytes y ser sin signo tiene disponible 4,294'967,295 datos
            $table->unsignedInteger('expediente_id');   // Llave foranea. Sirve para identificar al expediente al que pertenece.
            $table->unsignedTinyInteger('tiempo_maximo')->nullable();   // Tiempo maximo que tardaria esta bandeja en esta area.
            $table->string('observacion', 350)->nullable(); // Observacion es la observacion que le haya dado el area anterior a esta y que tiene que arreglar o verificar esta
            $table->char('estado', 1);  // Estado actual de esta bandeja. Por ejemplo: ('E': entrada), ('R': recepcion), ('S': salida), ('T': tramite), ('A': archivado), ('F': finalizado).
            $table->date('fecha_entrada');  // Fecha en la que esta bandeja es creada o derivada digitalmente a esta area.
            $table->date('fecha_recepcion')->nullable();    // Fecha en al que el expediente llega fisicamente a esta area.
            $table->date('fecha_tramite')->nullable();  // Fecha en la que empieza el proceso de tramite del expediente en esta area.
            $table->date('fecha_ultima')->nullable();   // Fecha en la que termina su subroceso de tramite y se deriva a otra area o finaliza el tramite total.
            $table->unsignedTinyInteger('area_id'); // Llave foranea. Area en la que se encuentra el expediente.
            $table->unsignedTinyInteger('area_origen_id')->nullable();  // Llave foranea. Area de la que vino el expediente, en caso de ser creada sera null.
            $table->unsignedTinyInteger('area_destino_id')->nullable(); // Llave foranea. Area a la que de derivara el expediente, en caso de ser el fin sera null.

            $table->foreign('area_id')->references('id')->on('area');
            $table->foreign('area_origen_id')->references('id')->on('area');
            $table->foreign('area_destino_id')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('bandeja');
    }
}
