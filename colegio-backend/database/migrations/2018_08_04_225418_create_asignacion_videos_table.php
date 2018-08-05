<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_videos', function (Blueprint $table) {
            $table->increments('asignacion_video_id');
            $table->integer('video_id')->unsigned();
            $table->foreign('video_id')
                  ->references('video_id')
                  ->on('videos')
                  ->onDelete('cascade');
            $table->integer('asignatura_id')->unsigned();
            $table->foreign('asignatura_id')
                ->references('asignatura_id')
                ->on('asignaturas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('asignacion_videos');
    }
}
