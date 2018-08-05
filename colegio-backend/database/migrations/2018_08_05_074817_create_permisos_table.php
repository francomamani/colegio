<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->increments('permiso_id');
            $table->integer('estudiante_id')->unsigned();
            $table->foreign('estudiante_id')
                  ->references('estudiante_id')
                  ->on('estudiantes')
                  ->onDelete('cascade');
            $table->text('motivo');
            $table->date('desde');
            $table->date('hasta');
            $table->string('solicitante', 50);
            $table->boolean('habilitado')->default(true);
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
        Schema::dropIfExists('permisos');
    }
}
