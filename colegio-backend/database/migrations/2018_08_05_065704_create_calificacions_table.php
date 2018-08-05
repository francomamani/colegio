<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->increments('calificacion_id');
            $table->integer('asignatura_id')->unsigned();
            $table->integer('inscripcion_id')->unsigned();
            $table->enum('bimestre', ['Primer bimestre', 'Segundo bimestre', 'Tercer bimestre', 'Cuarto bimestre']);
            $table->float('calificacion_1');
            $table->float('calificacion_2');
            $table->float('calificacion_3');
            $table->float('calificacion_4');
            $table->float('nota_final', 5, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
}
