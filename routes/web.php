<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Member;
use App\Models\PersonalTrainer;

Route::view('/', 'home.index')->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/contact', [DashboardController::class, 'contacts'])
    ->name('contact');

Route::get('/membership', [PackageController::class, 'membershipPlans'])
    ->name('membership');
    
Route::get('/profiles.index', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profile');

Route::post('/profiles.index', [ProfileController::class, 'store']);

Route::get('/profile.index', [ProfileController::class, 'getProfile']);

require __DIR__ . '/settings.php';
