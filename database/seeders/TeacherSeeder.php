<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public array $teachers = [
        [
            'name' => 'juliette light',
            'description' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'specialization' => ['english', 'science'],
            'status' => Status::ENABLE
        ],
        [
            'name' => 'jenny mgrayan',
            'description' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'specialization' => ['math', 'sports'],
            'status' => Status::ENABLE
        ],
        [
            'name' => 'nick hope',
            'description' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'specialization' => ['arabic', 'math'],
            'status' => Status::ENABLE
        ],
        [
            'name' => 'margaret grey',
            'description' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'specialization' => ['english'],
            'status' => Status::ENABLE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->teachers as $teacher) {
            Teacher::create([
                    'specialization' => implode(',', $teacher['specialization']),
                    'image' => strtolower(str_replace(' ', '_', $teacher['name'])) . '.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ] + $teacher);
        }
    }
}
