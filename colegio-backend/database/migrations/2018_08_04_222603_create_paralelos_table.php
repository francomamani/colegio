<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParalelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paralelos', function (Blueprint $table) {
            $table->increments('paralelo_id');
            $table->integer('profesor_id')->unsigned();
            $table->foreign('profesor_id')
                  ->references('profesor_id')
                  ->on('profesores')
                  ->onDelete('cascade');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')
                ->references('curso_id')
                ->on('cursos')
                ->onDelete('cascade');
            $table->string('nombre');
            $table->string('aula');
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
        Schema::dropIfExists('paralelos');
    }
}
