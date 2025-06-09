<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[PageController::class, 'about']);
Route::get('/contact',[PageController::class, 'contact']);
Route::get('/users',[UserController::class, 'index']) ->name('users.index');
Route::get('/users/create',[UserController::class, 'create']);
Route::post('/users/create',[UserController::class, 'store']);
Route::get('/users/{user}/edit',[UserController::class, 'edit']);
Route::put('/users/{user}/edit',[UserController::class, 'update']);
Route::delete('/users/{user}/delete',[UserController::class, 'destroy']);