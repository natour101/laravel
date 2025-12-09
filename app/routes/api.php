<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;


// Test Route
Route::get('/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'Backend API is working!',
    ]);
});


// Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);


// Courses Routes (Controller-based)
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/trending-courses', [CourseController::class, 'trending']);
Route::get('/popular-courses', [CourseController::class, 'popular']);
