<?php

namespace Database\Seeders;

use App\Enums\ContactStatus;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public array $contacts = [
        [
            'name' => 'juliette light',
            'email' => 'juliette-light@gmail.com',
            'phone' => '+126594512384',
            'message' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'status' => ContactStatus::NO_RESPONSE
        ],
        [
            'name' => 'jenny mgrayan',
            'email' => 'jenny-mgrayan@gmail.com',
            'phone' => '+47894512',
            'message' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'status' => ContactStatus::NO_RESPONSE
        ],
        [
            'name' => 'nick hope',
            'email' => 'nick-hope@gmail.com',
            'phone' => '+98716266412',
            'message' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'status' => ContactStatus::NO_RESPONSE
        ],
        [
            'name' => 'margaret grey',
            'email' => 'margaret-grey@gmail.com',
            'phone' => '+45794510238',
            'message' => 'lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.',
            'status' => ContactStatus::NO_RESPONSE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->contacts as $contact) {
            Contact::create($contact + [
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        }
    }
}
