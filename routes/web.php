<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Authentication routes----------

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login']);

//Registration routes----------
Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');

Route::post('/registration', [AuthenticationController::class, 'registration']);

// Dashboard routes----------

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [Controller::class, 'dashboard']);
    Route::get('/admin/update-profile', [AuthenticationController::class, 'dashboard']);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('aboutme');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/skills', function () {
    return view('skill');
});

Route::get('/projects', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

