<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    // Lectures Reminder
    Route::resource('lectures', LectureController::class);

    // Lectures Reminder
    Route::resource('users', UserController::class)->middleware(['admin']);

    // Account
    Route::get('/account', [AccountController::class, 'index'])->name('account');
});

// Auth
Route::get('/auth', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register')->middleware('guest');
Route::get('/auth/forget-password', [AuthController::class, 'forgetPassword'])->name('auth.forgetPassword')->middleware('guest');
Route::get('/auth/email/verify', [AuthController::class, 'verification'])->name('verification.notice')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
