<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('users')->insert([
            [
                'firstname' => 'Vincent',
                'lastname' => 'Laplace',
                'email' => 'vincentlaplace@gmail.com',
                'password' => bcrypt('vincentlaplace'),
                'job_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'firstname' => 'David',
                'lastname' => 'Mertens',
                'email' => 'davidmertens@gmail.com',
                'password' => bcrypt('davidmertens'),
                'job_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'firstname' => 'Michel',
                'lastname' => 'Castradi',
                'email' => 'michelcastradi@gmail.com',
                'password' => bcrypt('michelcastradi'),
                'job_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'firstname' => 'Estèle',
                'lastname' => 'Maronnier',
                'email' => 'estelemaronnier@gmail.com',
                'password' => bcrypt('estelemaronnier'),
                'job_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'firstname' => 'Hélène',
                'lastname' => 'Delaroche',
                'email' => 'helenedelaroche@gmail.com',
                'password' => bcrypt('helenedelaroche'),
                'job_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}