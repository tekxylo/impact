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

Route::get('/account/newride', function () {
    return view('impact/account/newride');
});


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/trails', [App\Http\Controllers\HomeController::class, 'index'])->name('trails');
Route::get('/maps', [App\Http\Controllers\HomeController::class, 'index'])->name('maps');
Route::get('/teams', [App\Http\Controllers\HomeController::class, 'index'])->name('teams');
Route::get('/events', [App\Http\Controllers\HomeController::class, 'index'])->name('events');

/* Profile Controller */
Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

/* Account Controller */
Route::get('/account/settings', [App\Http\Controllers\AccountController::class, 'index'])->name('accsettings');
Route::get('/account/vehicles', [App\Http\Controllers\AccountController::class, 'vehicles'])->name('accvehicles');

