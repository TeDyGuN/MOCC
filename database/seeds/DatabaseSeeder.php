<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TutorTableSeeder::class);
        $this->call(InsititutosTableSeeder::class);
        $this->call(CursoTableSeeder::class);
        $this->call(ModulosTableSeeder::class);
        $this->call(DocumentosTableSeeder::class);
        $this->call(TemasTableSeeder::class);
    }
}
