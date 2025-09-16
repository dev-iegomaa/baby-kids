<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public array $courses = [
        [
            'title' => 'water color',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 50,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'cooking',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 21,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'acrylic painting',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 23,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'science',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 60,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'math 1',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 60,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'math 2',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 60,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'math 3',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 60,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'arabic',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 200,
            'status' => Status::ENABLE
        ],
        [
            'title' => 'english',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'price' => 200,
            'status' => Status::ENABLE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->courses as $course) {
            Course::create([
                    'image' => strtolower(str_replace(' ', '_', $course['title'])) . '.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ] + $course);
        }
    }
}
