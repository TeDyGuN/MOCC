<?php

use Illuminate\Database\Seeder;

class InsititutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('institutos')->insert(array(
            'nombre'        => 'Univalle',
            'descripcion'   => 'Oferta la carrera de Psicología con una duración de 4 años, otras carreras relacionadas',
            'direccion'     => 'Av/Estados Unidos C/1 N° 1455',
            'web'           => 'univalle.com',
            'telefono'      => '3455698',
            'email'         => 'info@univalle.com',
        ));
        \DB::table('institutos')->insert(array(
            'nombre'        => 'XXX',
            'descripcion'   => 'Oferta otras carreras relacionadas',
            'direccion'     => 'Av/Colombia C/Estados Unidos N° 1455',
            'web'           => 'universidadxxx.com',
            'telefono'      => '3879874',
            'email'         => 'info@xxx.com',
        ));
        \DB::table('institutos')->insert(array(
            'nombre'        => 'Universidad de Psicologia',
            'descripcion'   => 'Oferta la carrera de Psicología con una duración de 6 años, otras carreras relacionadas',
            'direccion'     => 'Av/Estados Unidos C/1 N° 1455',
            'web'           => 'upscicologia.com',
            'telefono'      => '3455698',
            'email'         => 'info@piscouniversidad.com',
        ));
        \DB::table('institutos')->insert(array(
            'nombre'        => 'Universidad San Simon',
            'descripcion'   => 'Oferta la carrera de Psicología con una duración de 4 años, otras carreras relacionadas',
            'direccion'     => 'Av/Estados Unidos C/1 N° 1455',
            'web'           => 'sansimon.com',
            'telefono'      => '3455698',
            'email'         => 'info@umss.com',
        ));
    }
}
