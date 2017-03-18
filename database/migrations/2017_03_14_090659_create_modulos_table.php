<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{

    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('n_modulo');
            $table->integer('n_cursos');
            $table->string('img_url');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('Cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('modulos');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
