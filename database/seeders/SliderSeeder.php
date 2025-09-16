<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public array $sliders = [
        [
            'image' => '1',
            'status' => Status::ENABLE
        ],
        [
            'image' => '2',
            'status' => Status::ENABLE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->sliders as $slider) {
            Slider::create([
                    'image' => strtolower(str_replace(' ', '_', $slider['image'])) . '.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ] + $slider);
        }
    }
}
