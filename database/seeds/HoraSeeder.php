<?php

use Illuminate\Database\Seeder;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horas')->insert([
            ['ds_hora' => '08:00'],
            ['ds_hora' => '08:30'],
            ['ds_hora' => '09:00'],
            ['ds_hora' => '09:30'],
            ['ds_hora' => '10:00'],
            ['ds_hora' => '10:30'],
            ['ds_hora' => '11:00'],
            ['ds_hora' => '11:30'],
            ['ds_hora' => '12:00'],
            ['ds_hora' => '12:30'],
            ['ds_hora' => '13:00'],
            ['ds_hora' => '13:30'],
            ['ds_hora' => '14:00'],
            ['ds_hora' => '14:30'],
            ['ds_hora' => '15:00'],
            ['ds_hora' => '15:30'],
            ['ds_hora' => '16:00'],
            ['ds_hora' => '16:30'],
            ['ds_hora' => '17:00'],
            ['ds_hora' => '17:30'],
            ['ds_hora' => '18:00'],
            ['ds_hora' => '18:30'],
            ['ds_hora' => '19:00'],
            ['ds_hora' => '19:30'],
            ['ds_hora' => '20:00'],
            ['ds_hora' => '20:30'],
            ['ds_hora' => '21:00'],
            ['ds_hora' => '21:30'],
            ['ds_hora' => '22:00'],
            ['ds_hora' => '22:30'],
            ['ds_hora' => '23:00']
        ]);
    }
}
