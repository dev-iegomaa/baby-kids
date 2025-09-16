<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public array $events = [
        [
            'title' => 'a day in the park',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.',
            'from' => '9:00',
            'to' => '14:00',
            'date' => '2025-07-07',
            'location' => 'new york, times square',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'art session',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.',
            'from' => '9:00',
            'to' => '14:00',
            'date' => '2025-01-07',
            'location' => 'our school',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'watercolor practice',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.',
            'from' => '9:00',
            'to' => '14:00',
            'date' => '2025-09-08',
            'location' => 'secondary school',
            'status' => Status::ENABLE
        ],
        [
            'title' => 'sport training',
            'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.',
            'from' => '9:00',
            'to' => '14:00',
            'date' => '2025-04-10',
            'location' => 'central park (ny)',
            'status' => Status::ENABLE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->events as $event) {
            Event::create([
                    'image' => strtolower(str_replace(' ', '_', $event['title'])) . '.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ] + $event);
        }
    }
}
