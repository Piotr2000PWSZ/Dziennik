<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Lesson;
class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
            [
                'id'         => 1,
                'teacher_id' => 5,
                'class_id'   => 1,
                'weekday'    => 1,
                'week_number' => 1,
                'przedmiot_id'  => 1,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 2,
                'teacher_id' => 6,
                'class_id'   => 1,
                'weekday'    => 1,
                'week_number' => 1,
                'przedmiot_id'  => 2,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 3,
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 1,
                'week_number' => 1,
                'przedmiot_id'  => 3,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 4,
                'teacher_id' => 3,
                'class_id'   => 2,
                'weekday'    => 1,
                'week_number' => 1,
                'przedmiot_id'  => 4,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 5,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 2,
                'week_number' => 1,
                'przedmiot_id'  => 5,
                'start_time' => '08:00',
                'end_time'   => '10:00',
            ],
            [
                'id'         => 6,
                'teacher_id' => 5,
                'class_id'   => 1,
                'weekday'    => 2,
                'week_number' => 1,
                'przedmiot_id'  => 6,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 7,
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 2,
                'week_number' => 1,
                'przedmiot_id'  => 7,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 8,
                'teacher_id' => 6,
                'class_id'   => 1,
                'weekday'    => 3,
                'week_number' => 1,
                'przedmiot_id'  => 8,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 9,
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 3,
                'week_number' => 1,
                'przedmiot_id'  => 9,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 10,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 3,
                'week_number' => 1,
                'przedmiot_id'  => 10,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 11,
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 4,
                'week_number' => 1,
                'przedmiot_id'  => 11,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 12,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 4,
                'week_number' => 1,
                'przedmiot_id'  => 12,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
            [
                'id'         => 13,
                'teacher_id' => 4,
                'class_id'   => 1,
                'weekday'    => 4,
                'week_number' => 1,
                'przedmiot_id'  => 13,
                'start_time' => '14:00',
                'end_time'   => '16:00',
            ],
            [
                'id'         => 14,
                'teacher_id' => 3,
                'class_id'   => 1,
                'weekday'    => 5,
                'week_number' => 1,
                'przedmiot_id'  => 14,
                'start_time' => '08:00',
                'end_time'   => '10:00',
            ],
            [
                'id'         => 15,
                'teacher_id' => 2,
                'class_id'   => 1,
                'weekday'    => 5,
                'week_number' => 1,
                'przedmiot_id'  => 15,
                'start_time' => '10:00',
                'end_time'   => '12:00',
            ],
            [
                'id'         => 16,
                'teacher_id' => 6,
                'class_id'   => 1,
                'weekday'    => 5,
                'week_number' => 1,
                'przedmiot_id'  => 16,
                'start_time' => '12:00',
                'end_time'   => '14:00',
            ],
        ];

        Lesson::insert($lessons);
    }
}
