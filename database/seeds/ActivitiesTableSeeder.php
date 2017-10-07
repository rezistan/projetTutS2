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
        $c1 = Carbon::create(2018, 1, 8, 8, 0);
        $c2 = clone $c1;
        $c3 = clone $c1;
        $c4 = clone $c1;
        $c5 = clone $c1;

        $c2->addHours(2);
        $c3->addHours(4);
        $c4->addHours(30);
        $c5->addHours(32);

        DB::table('activities')->insert([
            [
                'task_id' => 1,
                'room_id' => 1,
                'started_at' => $c1,
                'ended_at' => $c2
            ],
            [
                'task_id' => 2,
                'room_id' => 2,
                'started_at' => $c2,
                'ended_at' => $c3
            ],
            [
                'task_id' => 3,
                'room_id' => 3,
                'started_at' => $c4,
                'ended_at' => $c5
            ]
        ]);
    }
}