<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JoblistController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/post_job', [JoblistController::class, 'job']);

Route::get('/Auth/register', [UserController::class, 'register'])->name('register');
Route::get('/Auth/login', [UserController::class, 'login'])->name('login');
Route::redirect('/register', '/Auth/register');
Route::redirect('/login', '/Auth/login');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/jobs', [JoblistController::class, 'index'])->name('jobs');
Route::post('/post_job', [JoblistController::class, 'store'])->name('post_job.store');

Route::post('/Auth/register', [UserController::class, 'store'])->name('register.store');
Route::post('/Auth/login', [UserController::class, 'authenticate'])->name('login.validate');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

