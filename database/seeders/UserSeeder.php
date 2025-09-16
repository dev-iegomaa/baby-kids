<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public array $users = [
        [
            'name' => 'ibrahim',
            'email' => 'ibrahim@gmail.com',
            'status' => Status::ENABLE
        ],
        [
            'name' => 'ahmed',
            'email' => 'ahmed@gmail.com',
            'status' => Status::ENABLE
        ],
        [
            'name' => 'omar',
            'email' => 'omar@gmail.com',
            'status' => Status::ENABLE
        ],
        [
            'name' => 'sara',
            'email' => 'sara@gmail.com',
            'status' => Status::ENABLE
        ],
        [
            'name' => 'gamal',
            'email' => 'gamal@gmail.com',
            'status' => Status::DISABLE
        ],
        [
            'name' => 'peter',
            'email' => 'peter@gmail.com',
            'status' => Status::ENABLE
        ],
        [
            'name' => 'tamer',
            'email' => 'tamer@gmail.com',
            'status' => Status::DISABLE
        ],
        [
            'name' => 'mariam',
            'email' => 'mariam@gmail.com',
            'status' => Status::ENABLE
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->users as $user) {
            User::create($user + [
                    'password' => bcrypt('123456'),
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        }
    }
}
