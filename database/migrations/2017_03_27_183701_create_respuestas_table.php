<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->text('respuesta');
            $table->integer('id_pregunta')->unsigned();
            $table->foreign('id_pregunta')->references('id')->on('preguntas')->onDelete('Cascade');
            $table->integer('id_test')->unsigned();
            $table->foreign('id_test')->references('id')->on('tests')->onDelete('Cascade');
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
        Schema::dropIfExists('respuestas');
    }
}
