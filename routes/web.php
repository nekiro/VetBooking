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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// meetings
Route::get('/meetings', [App\Http\Controllers\MeetingsController::class, 'index'])->name('meetings');
Route::post('/meetings', [App\Http\Controllers\MeetingsController::class, 'cancelMeeting'])->name('meetings-cancel');
Route::get('/book-meeting', [App\Http\Controllers\MeetingsController::class, 'bookMeetingIndex'])->name('book-meeting-get');
Route::post('/book-meeting', [App\Http\Controllers\MeetingsController::class, 'createMeeting'])->name('book-meeting-post');

// admin
Route::get('/admin/meetings', [App\Http\Controllers\AdminMeetingsController::class, 'index'])->name('admin-meetings');
Route::get('/admin/book-meeting', [App\Http\Controllers\AdminMeetingsController::class, 'bookMeetingIndex'])->name('admin-book-meeting-get');
Route::post('/admin/book-meeting', [App\Http\Controllers\AdminMeetingsController::class, 'createMeeting'])->name('admin-book-meeting-post');