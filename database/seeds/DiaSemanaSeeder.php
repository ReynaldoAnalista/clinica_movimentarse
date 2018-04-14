<?php

use Illuminate\Database\Seeder;

class DiaSemanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dia_semanas')->insert([
            ['ds_dia_semana' => 'Segunda'],
            ['ds_dia_semana' => 'Terça'],
            ['ds_dia_semana' => 'Quarta'],
            ['ds_dia_semana' => 'Quinta'],
            ['ds_dia_semana' => 'Sexta'],
            ['ds_dia_semana' => 'Sabado']
        ]);
    }
}
