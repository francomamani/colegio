<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('estudiante_id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                  ->references('usuario_id')
                  ->on('usuarios')
                  ->onDelete('cascade');
            $table->string('rude', 50);
            $table->string('persona_contacto', 50);
            $table->string('celular_contacto', 0);
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
        Schema::dropIfExists('estudiantes');
    }
}
