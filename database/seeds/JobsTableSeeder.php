<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            ['job' => 'Médecin'],
            ['job' => 'Infirmier'],
            ['job' => 'Cadre de santé']
        ]);
    }
}
