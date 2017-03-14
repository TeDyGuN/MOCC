<?php

use Illuminate\Database\Seeder;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cursos')->insert(array(
            'titulo'        => 'Psicología de la Atracción Interpersonal',
            'descripcion'   => 'Aprenda los principios psicológicos de la atracción interpersonal, a través de estudio de casos en comunidades de Norte Potosí.',
            'url_video'     => 'dhZUsNJ-LQU',
            'url_img'       => 'ex1.jpg',
            'costo'         => 0,
            'user_tutor'    => 1,
            'inst_id'       => 1,
        ));
        \DB::table('cursos')->insert(array(
            'titulo'        => 'Psicología del niño, niña y adolescente',
            'descripcion'   => 'Aprenda los principios psicológicos de los niños, niñas y adolescentes.',
            'url_video'     => 'cmpRLQZkTb8',
            'url_img'       => 'ex2.jpg',
            'costo'         => 0,
            'user_tutor'    => 1,
            'inst_id'       => 2,
        ));
        \DB::table('cursos')->insert(array(
            'titulo'        => 'Aprendizaje asisitido por padres para niños',
            'descripcion'   => 'Eduque a los los principios psicológicos de los niños, niñas y adolescentes.',
            'url_video'     => 'bx1Bh8ZvH84',
            'url_img'       => 'ex3.jpg',
            'costo'         => 0,
            'user_tutor'    => 1,
            'inst_id'       => 3,
        ));
        \DB::table('cursos')->insert(array(
            'titulo'        => 'Aprendizaje digital: importancia y consejos',
            'descripcion'   => 'Aprenda los principios del aprendizaje digital psicológicos de los niños, niñas y adolescentes.',
            'url_video'     => 'tI-5uv4wryI',
            'url_img'       => 'ex4.jpg',
            'costo'         => 0,
            'user_tutor'    => 1,
            'inst_id'       => 4,
        ));
        \DB::table('cursos')->insert(array(
            'titulo'        => 'Introduccion a la Infografia de la Educacion',
            'descripcion'   => 'Aprenda los principios de la infografia en la educacion para los niños, niñas y adolescentes.',
            'url_video'     => 'EHfx9LXzxpw',
            'url_img'       => 'ex5.jpg',
            'costo'         => 0,
            'user_tutor'    => 1,
            'inst_id'       => 1,
        ));
        \DB::table('cursos')->insert(array(
            'titulo'        => 'Aprendizaje mediante juegos infantiles',
            'descripcion'   => 'Aprenda los principios psicológicos mediante juegos infantiles para los niños, niñas y adolescentes.',
            'url_video'     => 'RB-RcX5DS5A',
            'url_img'       => 'ex6.jpg',
            'costo'         => 0,
            'user_tutor'    => 1,
            'inst_id'       => 2,
        ));
    }
}
