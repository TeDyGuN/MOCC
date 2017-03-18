<?php

use Illuminate\Database\Seeder;

class DocumentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('documentos')->insert(array(
            'nombre'        => 'Apendice 1',
            'url'           => 'ley164',
            'modulo_id'     => '1'
        ));
    }
}
