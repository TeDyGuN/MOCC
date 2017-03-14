<?php

use Illuminate\Database\Seeder;

class TutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tutors')->insert(array(
            'descripcion'   => 'Psicólogo con experiencia en terapia familiar y de pareja.',
            'web'           => 'psicologia.com',
            'user_id'       => 4,
        ));
    }
}
