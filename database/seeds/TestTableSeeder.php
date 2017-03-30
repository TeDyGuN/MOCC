<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     /*

     Schema::create('tests', function (Blueprint $table) {
         $table->increments('id');
         $table->string("nombre");
         $table->integer("n_preguntas");
         $table->integer('id_modulo')->unsigned();
         $table->foreign('id_modulo')->references('id')->on('modulos')->onDelete('Cascade');
         $table->integer('id_curso')->unsigned();
         $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('Cascade');
         $table->timestamps();
     });
     */
    public function run()
    {
        DB::table('tests')->insert([
           'nombre'       => "Test Primer Modulo",
           'n_preguntas'  => 5,
           'id_curso'     => 1
       ]);
    }
}
