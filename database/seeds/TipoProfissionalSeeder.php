<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class TipoProfissionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_profissionals')->insert([
            ['ds_profissional' => 'Fono'],
            ['ds_profissional' => 'Psicólogo'],
            ['ds_profissional' => 'Psicomotrista'],
            ['ds_profissional' => 'Psicopedagogo'],
            ['ds_profissional' => 'T.O']
        ]);
    }
}
