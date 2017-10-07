<?php

use Illuminate\Database\Seeder;

class ActivityGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_groups')->insert([
            ['user_id' => 1, 'activity_id' => 1],
            ['user_id' => 1, 'activity_id' => 2],
            ['user_id' => 2, 'activity_id' => 1],
            ['user_id' => 3, 'activity_id' => 2]
        ]);
    }
}