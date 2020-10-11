<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/newride', function () {
    return view('impact/account/newride');
});

Route::get('/banned', function () {
    return view('errors/banned');
})->middleware(['verified']);


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware(['verified']);
Route::get('/account/settings', [App\Http\Controllers\AccountController::class, 'index'], ['view' => 'general']);

Route::get('/verifydiscord', [App\Http\Controllers\DiscordVerificationController::class, 'index']);
Route::get('/discorddata', [App\Http\Controllers\DiscordVerificationController::class, 'getdata']);

Fortify::verifyEmailView(function () {
    return view('auth.verify-email');
});

Route::get('/enable2fa', [App\Http\Controllers\TwoFactorAuthenticationController::class, 'store']);
Route::get('/disable2fa', [App\Http\Controllers\TwoFactorAuthenticationController::class, 'destroy']);
Route::get('/recoverycodes', [App\Http\Controllers\TwoFactorAuthenticationController::class, 'recoverycodes']);
Route::get('/qrcode', [App\Http\Controllers\TwoFactorAuthenticationController::class, 'qrcode']);
