<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CV;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\WorkerController;


Route::get('/home', function () {
    return 'welcome';
});

Route::get('/user', [UserController::class, 'index']);
Route::post('/user/register', [UserController::class, 'register']);
Route::post('/user/login', [UserController::class, 'login']);
Route::get('/user/logged/{id}', [UserController::class, 'logged']);



