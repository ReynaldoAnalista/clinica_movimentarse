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
        $this->call(DiaSemanaSeeder::class);
        $this->call(HoraSeeder::class);
        $this->call(SalaSeeder::class);
        $this->call(TipoProfissionalSeeder::class);
    }
}
