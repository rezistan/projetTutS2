<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('activities')->insert([
            [
                'task_id' => 1,
                'room_id' => 1,
                'day' => 1,
                'week' => 1,
                'year' => 2018,
                'started_at' => '08:00:00',
                'ended_at' => '10:00:00'
            ],
            [
                'task_id' => 2,
                'room_id' => 2,
                'day' => 1,
                'week' => 1,
                'year' => 2018,
                'started_at' => '10:00:00',
                'ended_at' => '12:00:00'
            ],
            [
                'task_id' => 3,
                'room_id' => 3,
                'day' => 1,
                'week' => 1,
                'year' => 2018,
                'started_at' => '14:00:00',
                'ended_at' => '16:00:00'
            ]
        ]);
    }
}