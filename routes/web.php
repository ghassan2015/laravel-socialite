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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
Route::get('login/linkedin', [App\Http\Controllers\Auth\LoginController::class, 'redirectTolinkedin'])->name('login.linkedin');
Route::get('login/linkedin/callback', [App\Http\Controllers\Auth\LoginController::class, 'handlelinkedinCallback']);




Route::get('getdata',[App\Http\Controllers\Auth\LoginController::class,'_registerOrLoginUser']);
Route::get('firebase-phone-authentication', [\App\Http\Controllers\FirebaseController::class, 'index']);
Route::get('userData/{res}', [\App\Http\Controllers\FirebaseController::class, 'userData']);

