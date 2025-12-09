<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return response()->json(Course::all());
    }

    public function trending()
    {
        return response()->json(
            Course::where('is_trending', 1)->get()
        );
    }

    public function popular()
    {
        return response()->json(
            Course::where('is_popular', 1)->get()
        );
    }
}
