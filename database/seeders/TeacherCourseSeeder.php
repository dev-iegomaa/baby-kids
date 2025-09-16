<?php

namespace Database\Seeders;

use App\Models\TeacherCourse;
use Illuminate\Database\Seeder;

class TeacherCourseSeeder extends Seeder
{
    public array $teacherCourses = [
        [
            'teacher_id' => 1,
            'course_id' => 4
        ],
        [
            'teacher_id' => 1,
            'course_id' => 9
        ],
        [
            'teacher_id' => 2,
            'course_id' => 1
        ],
        [
            'teacher_id' => 2,
            'course_id' => 2
        ],
        [
            'teacher_id' => 2,
            'course_id' => 3
        ],
        [
            'teacher_id' => 2,
            'course_id' => 5
        ],
        [
            'teacher_id' => 2,
            'course_id' => 6
        ],
        [
            'teacher_id' => 2,
            'course_id' => 7
        ],
        [
            'teacher_id' => 3,
            'course_id' => 6
        ],
        [
            'teacher_id' => 3,
            'course_id' => 7
        ],
        [
            'teacher_id' => 3,
            'course_id' => 8
        ],
        [
            'teacher_id' => 4,
            'course_id' => 9
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->teacherCourses as $teacherCourse) {
            TeacherCourse::create($teacherCourse + [
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        }
    }
}
