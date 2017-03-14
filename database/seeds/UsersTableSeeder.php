<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'nombre'    => 'Ted',
            'apellidos' => 'Carrasco',
            'celular'   => '71200087',
            'email'     => 'ted_cc@hotmail.com',
            'password'  => \Hash::make('secret'),
        ));
        \DB::table('users')->insert(array(
            'nombre'    => 'Gary',
            'apellidos' => 'Carrasco',
            'celular'   => '73000293',
            'email'     => 'gary_cc@hotmail.com',
            'password'  => \Hash::make('secret'),
        ));
        \DB::table('users')->insert(array(
            'nombre'    => 'Admin',
            'apellidos' => '',
            'celular'   => '73000293',
            'email'     => 'admin@admin.com',
            'password'  => \Hash::make('secret'),
        ));
        \DB::table('users')->insert(array(
            'nombre'    => 'Cristofer',
            'apellidos' => 'Ortiz Flores',
            'celular'   => '60276790',
            'email'     => 'crof24@gmail.com',
            'password'  => \Hash::make('secret'),
        ));


    }
}
