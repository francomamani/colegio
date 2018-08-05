<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('usuario_id');
            $table->integer('gestion_id')->unsigned();
            $table->foreign('gestion_id')
                  ->references('gestion_id')
                  ->on('gestiones')
                  ->onDelete('cascade');
            $table->string('cuenta', 50)->unique();
            $table->string('password', 50);
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula', 50);
            $table->string('direccion');
            $table->string('celular', 50);
            $table->enum('tipo_usuario', ['profesor', 'estudiante', 'administrador']);
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
