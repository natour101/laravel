<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Laravel Basics',
                'teacher' => 'Ahmed Saad',
                'price' => 25,
                'image' => 'laravel.png',
                'is_trending' => 1,
                'is_popular' => 0,
            ],
            [
                'title' => 'Mastering Flutter',
                'teacher' => 'Osama Natour',
                'price' => 40,
                'image' => 'flutter.png',
                'is_trending' => 1,
                'is_popular' => 1,
            ],
            [
                'title' => 'JavaScript Essentials',
                'teacher' => 'Mohammad Barakat',
                'price' => 20,
                'image' => 'js.png',
                'is_trending' => 0,
                'is_popular' => 1,
            ],
            [
                'title' => 'PHP Crash Course',
                'teacher' => 'Abdulrahman Amouri',
                'price' => 30,
                'image' => 'php.png',
                'is_trending' => 1,
                'is_popular' => 1,
            ],
            [
                'title' => 'Database MySQL',
                'teacher' => 'Sarah Ibrahim',
                'price' => 18,
                'image' => 'mysql.png',
                'is_trending' => 0,
                'is_popular' => 1,
            ],
            [
                'title' => 'React Native Bootcamp',
                'teacher' => 'Ali Qassem',
                'price' => 35,
                'image' => 'react.png',
                'is_trending' => 1,
                'is_popular' => 0,
            ],
            [
                'title' => 'Python for Beginners',
                'teacher' => 'Dania Noor',
                'price' => 15,
                'image' => 'python.png',
                'is_trending' => 0,
                'is_popular' => 1,
            ],
            [
                'title' => 'Advanced Java',
                'teacher' => 'Majd Yaseen',
                'price' => 28,
                'image' => 'java.png',
                'is_trending' => 1,
                'is_popular' => 0,
            ],
            [
                'title' => 'Full Stack Web Developer',
                'teacher' => 'Ahmad Khalil',
                'price' => 50,
                'image' => 'fullstack.png',
                'is_trending' => 1,
                'is_popular' => 1,
            ],
            [
                'title' => 'UI/UX Design Basics',
                'teacher' => 'Reema Fakhoury',
                'price' => 22,
                'image' => 'uiux.png',
                'is_trending' => 0,
                'is_popular' => 1,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
