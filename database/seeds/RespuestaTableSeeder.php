<?php

use Illuminate\Database\Seeder;

class RespuestaTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('respuestas')->insert([
           [
             'numero'       => 1,
             'respuesta'    => 'Ciencia que Estudia el arte',
             'id_pregunta'  => 1,
             'id_test'      => 1
           ],
           [
             'numero'       => 2,
             'respuesta'     => 'Ciencia que estudia el comportamiento humano',
             'id_pregunta'  => 1,
             'id_test'      => 1
           ],
           [
             'numero'       => 3,
             'respuesta'     => 'Ciencia que estudia los fosiles',
             'id_pregunta'  => 1,
             'id_test'      => 1
           ],
           [
             'numero'       => 4,
             'respuesta'     => 'Ciencia que Estudia el comportamiento animal',
             'id_pregunta'  => 1,
             'id_test'      => 1
           ]
        ]);
        DB::table('respuestas')->insert([
          [
            'numero'       => 1,
            'respuesta'     => '2',
            'id_pregunta'  => 2,
            'id_test'      => 1
          ],
          [
            'numero'       => 2,
            'respuesta'     => '3',
            'id_pregunta'  => 2,
            'id_test'      => 1
          ],
          [
            'numero'       => 3,
            'respuesta'     => '5',
            'id_pregunta'  => 2,
            'id_test'      => 1
          ],
          [
            'numero'       => 4,
            'respuesta'     => '11',
            'id_pregunta'  => 2,
            'id_test'      => 1
          ]
        ]);
        DB::table('respuestas')->insert([
           [
             'numero'       => 1,
             'respuesta'     => 'Verde',
             'id_pregunta'  => 3,
             'id_test'      => 1
           ],
           [
             'numero'       => 2,
             'respuesta'     => 'Azul',
             'id_pregunta'  => 3,
             'id_test'      => 1
           ],
           [
             'numero'       => 3,
             'respuesta'     => 'Rojo',
             'id_pregunta'  => 3,
             'id_test'      => 1
           ],
           [
             'numero'       => 4,
             'respuesta'     => 'Blanco',
             'id_pregunta'  => 3,
             'id_test'      => 1
           ]
        ]);
        DB::table('respuestas')->insert([
          [
            'numero'       => 1,
            'respuesta'     => '2',
            'id_pregunta'  => 4,
            'id_test'      => 1
          ],
          [
            'numero'       => 2,
            'respuesta'     => '7',
            'id_pregunta'  => 4,
            'id_test'      => 1
          ],
          [
            'numero'       => 3,
            'respuesta'     => '8',
            'id_pregunta'  => 4,
            'id_test'      => 1
          ],
          [
            'numero'       => 4,
            'respuesta'     => '4',
            'id_pregunta'  => 4,
            'id_test'      => 1
          ]
        ]);
        DB::table('respuestas')->insert([
           [
             'numero'       => 1,
             'respuesta'     => '2',
             'id_pregunta'  => 5,
             'id_test'      => 1
           ],
           [
             'numero'       => 2,
             'respuesta'     => '3',
             'id_pregunta'  => 5,
             'id_test'      => 1
           ],
           [
             'numero'       => 3,
             'respuesta'     => '66',
             'id_pregunta'  => 5,
             'id_test'      => 1
           ],
           [
             'numero'       => 4,
             'respuesta'     => '1',
             'id_pregunta'  => 5,
             'id_test'      => 1
           ]
        ]);
    }
}
