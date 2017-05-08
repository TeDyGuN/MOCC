<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = [
        'id', 'titulo', 'descripcion', 'url_video', 'url_img', 'costo', 'user_tutor', 'inst_id'
    ];

    /*
     * Schema::create('cursos', function (Blueprint $table) {
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
     * */
}
