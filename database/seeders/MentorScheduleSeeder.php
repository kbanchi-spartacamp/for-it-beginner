<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class MentorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'mentor_id' => 1,
                'date' => date('Y-m-d'),
                'time' => 38,
            ],
            [
                'mentor_id' => 1,
                'date' => date('Y-m-d'),
                'time' => 39,
            ],
            [
                'mentor_id' => 1,
                'date' => date('Y-m-d'),
                'time' => 40,
            ],
            [
                'mentor_id' => 2,
                'date' => date('Y-m-d'),
                'time' => 38,
            ],
            [
                'mentor_id' => 2,
                'date' => date('Y-m-d'),
                'time' => 39,
            ],
            [
                'mentor_id' => 3,
                'date' => date('Y-m-d'),
                'time' => 38,
            ],
        ];
        DB::table('mentor_schedules')->insert($param);
    }
}
