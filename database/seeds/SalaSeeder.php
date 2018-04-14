<?php

use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salas')->insert([
            ['nm_sala' => 'Sala 1' ,'ds_sala' => 'Fono(1410)'],
            ['nm_sala' => 'Sala 2' ,'ds_sala' => 'Adulto(1410)'],
            ['nm_sala' => 'Sala 3' ,'ds_sala' => 'Criança(1410)'],
            ['nm_sala' => 'Sala 4' ,'ds_sala' => 'N/A'],
            ['nm_sala' => 'Sala 5' ,'ds_sala' => '(806)'],
            ['nm_sala' => 'Sala 6' ,'ds_sala' => '(806)']
        ]);
    }
}
