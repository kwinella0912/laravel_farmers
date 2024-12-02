<?php

use Illuminate\Support\Facades\Route;

//route for students
Route::get('/student', [\App\Http\Controllers\StudentController::class , 'index']);
Route::get('/student/create', [\App\Http\Controllers\StudentController::class , 'create']);
Route::post('/student/create', [\App\Http\Controllers\StudentController::class , 'store']);