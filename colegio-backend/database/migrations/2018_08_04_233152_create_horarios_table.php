<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('horario_id');
            $table->integer('asignatura_id')->unsigned();
            $table->foreign('asignatura_id')
                  ->references('asignatura_id')
                  ->on('asignaturas')
                  ->onDelete('cascade');
            $table->date('desde');
            $table->date('hasta');
            $table->string('dia', 50);
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
        Schema::dropIfExists('horarios');
    }
}
