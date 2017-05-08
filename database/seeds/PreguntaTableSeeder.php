<?php

use Illuminate\Database\Seeder;

class PreguntaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     /*
     Schema::create('preguntas', function (Blueprint $table) {
         $table->increments('id');
         $table->integer("numero");
         $table->text("pregunta");
         $table->integer("correcto");
         $table->integer('id_test')->unsigned();
         $table->foreign('id_test')->references('id')->on('tests')->onDelete('Cascade');
         $table->timestamps();
     });
     });

     */
    public function run()
    {
            DB::table('preguntas')->insert([
               [
                 'numero'       => 1,
                 'pregunta'     => 'Que es Psicologia?',
                 'correcto'     => 2,
                 'id_test'      => 1
               ],
               [
                  'numero'       => 2,
                  'pregunta'     => 'Cuanto es 1 + 1?',
                  'correcto'     => 1,
                  'id_test'      => 1
               ],
               [
                   'numero'       => 3,
                   'pregunta'     => 'De que Color es el color rojo?',
                   'correcto'     => 3,
                   'id_test'      => 1
               ],
               [
                    'numero'       => 4,
                    'pregunta'     => 'Cuanto es 2 + 2?',
                    'correcto'     => 4,
                    'id_test'      => 1
               ],
               [
                    'numero'       => 5,
                    'pregunta'     => 'Cuanto es 1 + 2?',
                    'correcto'     => 2,
                    'id_test'      => 1
               ],

           ]);
        
    }
}
