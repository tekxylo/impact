<?php

use App\Http\Livewire\Account\Accsettings;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;

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


/* AUTHENTICATION */

Route::get('/login', App\Http\Livewire\Login::class)->name('login');

Route::get('/', App\Http\Livewire\Frontpage::class);
Route::get('/dashboard', App\Http\Livewire\Dashboard\Dashboard::class)->middleware('auth')->middleware('verified');
Route::get('/account/settings', App\Http\Livewire\Account\Accsettings::class)->middleware('auth');


Route::get('/test', [App\Http\Controllers\LoginAuthenticationController::class, 'authenticate']);
Route::get('/verifydiscord', [App\Http\Controllers\DiscordVerificationController::class, 'index']);
Route::get('/discorddata', [App\Http\Controllers\DiscordVerificationController::class, 'getdata']);

Fortify::verifyEmailView(function () {
    return view('auth.verify-email');
});
