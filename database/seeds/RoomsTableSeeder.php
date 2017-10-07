<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['room' => 'S26'],
            ['room' => 'S13'],
            ['room' => 'S11'],
            ['room' => 'S12'],
            ['room' => 'S17'],
            ['room' => 'Salle de réunion'],
            ['room' => 'S03'],
            ['room' => 'S01'],
            ['room' => 'S24']
        ]);
    }
}