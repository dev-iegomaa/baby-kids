<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public array $faqs = [
        [
            'question' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'answer' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'status' => Status::ENABLE
        ],
        [
            'question' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'answer' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'status' => Status::ENABLE
        ],
        [
            'question' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'answer' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'status' => Status::ENABLE
        ],
        [
            'question' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'answer' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec. Morbi a commodo neque, sit amet tempor arcu.',
            'status' => Status::DISABLE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->faqs as $faq) {
            Faq::create($faq + [
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        }
    }
}
