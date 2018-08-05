<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('profesor_id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                  ->references('usuario_id')
                  ->on('usuarios')
                  ->onDelete('cascade');
            $table->string('rda', 50);
            $table->string('grado_academico', 50);
            $table->string('especialidad', 50);
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
        Schema::dropIfExists('profesores');
    }
}
