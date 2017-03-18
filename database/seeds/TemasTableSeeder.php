<?php

use Illuminate\Database\Seeder;

class TemasTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('temas')->insert(array(
            'nombre'        => 'Atracción Interpersonal',
            'descripcion'   => 'Breve descripción del video expresado en objetivos de aprendizaje',
            'numero'        => '1',
            'url_video'     => 'f7EuamMTWgw',
            'modulo_id'     => '1'
        ));
        \DB::table('temas')->insert(array(
            'nombre'        => 'El poder de la aproximación',
            'descripcion'   => 'Breve descripción del video expresado en objetivos de aprendizaje',
            'numero'        => '2',
            'url_video'     => 'kzUqhw_yymM',
            'modulo_id'     => '1'
        ));
        \DB::table('temas')->insert(array(
            'nombre'        => 'Emociones Positivas y Negativas',
            'descripcion'   => 'Breve descripción del video expresado en objetivos de aprendizaje',
            'numero'        => '3',
            'url_video'     => '3Rn-HznkIIM',
            'modulo_id'     => '1'
        ));
        \DB::table('temas')->insert(array(
            'nombre'        => 'Atracción personal',
            'descripcion'   => 'Breve descripción del video expresado en objetivos de aprendizaje',
            'numero'        => '4',
            'url_video'     => 'ED8RW1tKnrk',
            'modulo_id'     => '1'
        ));
        \DB::table('temas')->insert(array(
            'nombre'        => 'Peligros de romances Amorosos',
            'descripcion'   => 'Breve descripción del video expresado en objetivos de aprendizaje',
            'numero'        => '5',
            'url_video'     => 'Bg5LGtACpPY',
            'modulo_id'     => '1'
        ));
        \DB::table('temas')->insert(array(
            'nombre'        => 'Como ser Feliz en una relacion',
            'descripcion'   => 'Breve descripción del video expresado en objetivos de aprendizaje',
            'numero'        => '6',
            'url_video'     => '_UwWYtLWEZg',
            'modulo_id'     => '1'
        ));
        \DB::table('temas')->insert(array(
            'nombre'        => 'Infidelidades, el riesgo',
            'descripcion'   => 'Breve descripción del video expresado en objetivos de aprendizaje',
            'numero'        => '7',
            'url_video'     => 'IFfgwg_0RAQ',
            'modulo_id'     => '1'
        ));

    }
}
