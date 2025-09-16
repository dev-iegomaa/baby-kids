<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(TeacherCourseSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
