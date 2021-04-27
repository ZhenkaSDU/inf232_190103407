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
use App\Http\Controllers\MailController;
Route::get('/email', [MailController::class, 'sendEmail']);

Route::view('profile', 'profile');

Route::get('/profile/{lang}', function($lang) {
    App::setlocale($lang);
    return view('profile');
});


use App\Http\Controllers\UserController;
Route::get('users', [UserController::class, 'index']);

