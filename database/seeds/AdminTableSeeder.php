<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('administradors')->insert(array(
            'user_id'    => 1,
        ));

        \DB::table('secretarias')->insert(array(
            'user_id'    => 2,
        ));

    }

}
