<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ComputerController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('computer', [ComputerController::class,'index']);
Route::get('computer/{id}', [ComputerController::class,'show']);
Route::post('computer', [ComputerController::class,'store']);
Route::put('computer/{id}', [ComputerController::class,'update']);
Route::delete('computer/{id}', [ComputerController::class,'destroy']);
Route::post('computer/{search}', [ComputerController::class,'search']);

Route::post('register', [AuthController::class, 'register']);
// Route::get('register', [AuthController::class, 'show']);
// Route::get('register/{id}', [AuthController::class, 'fetch']);

Route::post('login', [AuthController::class, 'login']);
// Route::get('login', [AuthController::class, 'show']);
// Route::get('login/{id}', [AuthController::class, 'fetch']);

Route::get('users', [AuthController::class, 'index']);

Route::middleware('auth:sanctum') -> group (function() {
    Route::get('/users/{id}', [AuthController::class, 'index']);
});