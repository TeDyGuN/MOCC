<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('url_video');
            $table->string('url_img');
            $table->integer('costo');
            $table->integer('user_tutor')->unsigned();
            $table->foreign('user_tutor')->references('id')->on('tutors')->onDelete('Cascade');
            $table->integer('inst_id')->unsigned();
            $table->foreign('inst_id')->references('id')->on('institutos')->onDelete('Cascade');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('cursos');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
