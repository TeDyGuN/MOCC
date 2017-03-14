<?php

use Illuminate\Database\Seeder;

class ModulosTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('modulos')->insert(array(
            'nombre'    => 'El comienzo de la atracción: proximidad y emociones',
            'n_modulo'  => '1',
            'n_cursos'  => '7',
            'img_url'   => 'm1_1.jpg',
            'curso_id'  => '1',
        ));
        \DB::table('modulos')->insert(array(
            'nombre'    => 'La continuacion de la atracción: proximidad y emociones',
            'n_modulo'  => '2',
            'n_cursos'  => '6',
            'img_url'   => 'm1_2.jpg',
            'curso_id'  => '1',
        ));
        \DB::table('modulos')->insert(array(
            'nombre'    => 'La finalizacion de la atracción: proximidad y emociones',
            'n_modulo'  => '3',
            'n_cursos'  => '8',
            'img_url'   => 'm1_3.jpg',
            'curso_id'  => '1',
        ));
        \DB::table('modulos')->insert(array(
            'nombre'    => 'Incidencias emocionales de la atracción: proximidad y emociones',
            'n_modulo'  => '4',
            'n_cursos'  => '9',
            'img_url'   => 'm1_4.png',
            'curso_id'  => '1',
        ));
//        \DB::table('modulos')->insert(array(
//            'nombre'    => 'El comienzo de la atracción: proximidad y emociones',
//            'n_modulo'  => '5',
//            'n_cursos'  => '11',
//            'img_url'   => 'Av/Estados Unidos C/1 N° 1455',
//            'curso_id'  => '2',
//        ));
//        \DB::table('modulos')->insert(array(
//            'nombre'    => 'El comienzo de la atracción: proximidad y emociones',
//            'n_modulo'  => '6',
//            'n_cursos'  => '11',
//            'img_url'   => 'Av/Estados Unidos C/1 N° 1455',
//            'curso_id'  => '2',
//        ));
    }
}
