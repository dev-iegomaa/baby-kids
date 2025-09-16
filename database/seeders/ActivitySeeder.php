<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public array $activities = [
        [
            'title' => 'custom food',
            'description' => 'lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'many sports',
            'description' => 'lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'bus service',
            'description' => 'lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'music lesson',
            'description' => 'lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'excursions',
            'description' => 'lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'languages',
            'description' => 'lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.',
            'status' => Status::ENABLE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->activities as $activity) {
            Activity::create($activity + [
                    'icon' => strtolower(str_replace(' ', '_', $activity['title'])) . '.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        }
    }
}
