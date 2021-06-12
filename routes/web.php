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

Auth::routes();

Route::get('/landing-page', [App\Http\Controllers\HomeController::class, 'index'])->name('landing-page');

Route::get('/login', function () {
    return view('login');
})->name('log-in');

Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');


