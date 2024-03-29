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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/calendar', function () {
    return view('calendar');
})->middleware('auth:sanctum');

Route::get('/groups', function () {
    return view('groups');
})->middleware(['auth:sanctum', 'verified']);

Route::get('/music', function () {
    return view('music');
})->middleware('auth:sanctum');

Route::get('/statistics', function () {
    return view('statistics');
})->middleware('auth:sanctum');
