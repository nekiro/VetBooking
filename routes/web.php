<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/meetings', [App\Http\Controllers\MeetingsController::class, 'index'])->name('meetings');
Route::post('/meetings', [App\Http\Controllers\MeetingsController::class, 'cancelMeeting'])->name('meetings-cancel');

// creating meetings
Route::get('/book-meeting', [App\Http\Controllers\MeetingsController::class, 'meetingsIndex'])->name('book-meeting-get');
Route::post('/book-meeting', [App\Http\Controllers\MeetingsController::class, 'createMeeting'])->name('book-meeting-post');