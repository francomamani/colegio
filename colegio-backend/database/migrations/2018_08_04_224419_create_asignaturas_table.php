<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->increments('asignatura_id');
            $table->integer('paralelo_id')->unsigned();
            $table->foreign('paralelo_id')
                  ->references('paralelo_id')
                  ->on('paralelos')
                  ->onDelete('cascade');
            $table->integer('profesor_id')->unsigned();
            $table->foreign('profesor_id')
                ->references('profesor_id')
                ->on('profesores')
                ->onDelete('cascade');
            $table->string('nombre');
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
        Schema::dropIfExists('asignaturas');
    }
}
