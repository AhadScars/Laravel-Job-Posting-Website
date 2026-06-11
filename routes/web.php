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

Route::get('/dashboard', function () {
    $applied_jobs = \App\Models\AppliedJobs::with('user', 'job')->latest()->get();
    return view('dashboard', compact('applied_jobs'));
})->name('dashboard')->middleware('auth');

Route::get('/post_job', [JoblistController::class, 'job'])->middleware('auth');
Route::post('/post_job', [JoblistController::class, 'store'])->name('post_job.store')->middleware('auth');

Route::get('/Auth/register', [UserController::class, 'register'])->name('register');
Route::get('/Auth/login', [UserController::class, 'login'])->name('login');
Route::redirect('/register', '/Auth/register');
Route::redirect('/login', '/Auth/login');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/jobs', [JoblistController::class, 'index'])->name('jobs');
Route::get('/jobs/{id}', [JoblistController::class, 'show'])->name('jobs.show');
Route::post('/post_job', [JoblistController::class, 'store'])->name('post_job.store');
Route::post('/upload', [UserController::class, 'uploadDocument'])->middleware('auth')->name('upload.document');
Route::get('/jobs/{id}/edit_job', [JoblistController::class, 'edit'])->middleware('auth')->name('edit_job');
Route::put('/jobs/{id}/edit_job', [JoblistController::class, 'update'])->middleware('auth')->name('edit_job.update');
Route::delete('/jobs/{id}/delete_job', [JoblistController::class, 'destroy'])->middleware('auth')->name('delete_job');

Route::post('/Auth/register', [UserController::class, 'store'])->name('register.store');
Route::post('/Auth/login', [UserController::class, 'authenticate'])->name('login.validate');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');


Route::post('/jobs/{id}/apply', [JoblistController::class, 'apply'])
    ->middleware('auth')
    ->name('job.apply');