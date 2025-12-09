<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // إرجاع جميع الكورسات
    public function index()
    {
        return response()->json(Course::all());
    }

    // إرجاع الكورسات الـ Trending
    public function trending()
    {
        $courses = Course::where('is_trending', 1)->get();
        return response()->json($courses);
    }

    // إرجاع الكورسات الـ Popular
    public function popular()
    {
        $courses = Course::where('is_popular', 1)->get();
        return response()->json($courses);
    }
}
