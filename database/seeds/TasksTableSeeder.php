<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            ['task' => 'Visite', 'color' => 'orange'],
            ['task' => 'Pédiatrie', 'color' => 'red'],
            ['task' => 'Cardiologie', 'color' => 'yellow'],
            ['task' => 'Echographie', 'color' => 'blue'],
            ['task' => "Test d'effort", 'color' => 'green']
        ]);
    }
}
