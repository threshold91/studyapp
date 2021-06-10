<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;

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

Route::get('/options', function () {
    return view('options'); 
});

Route::get('/test', function () {
    return view('test'); 
});

Route::get('/calendar', function () {
    return view('full-calender'); 
});

Route::get('/dashHome', function () {
    return view('dashHome'); 
});

Route::get('/groups', function () {
    return view('groups');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/statistics', function () {
    return view('statistics');
});

Route::get('full-calender', [FullCalenderController::class, 'index']);
Route::post('full-calender/action', [FullCalenderController::class, 'action']);