<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Member;
use App\Models\PersonalTrainer;

Route::view('/', 'home.index')->name('home');
    
Route::get('/contact', [DashboardController::class, 'contacts'])
    ->name('contact');

Route::get('/membership', [PackageController::class, 'membershipPlans'])
    ->name('membership');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('packages', PackageController::class);
    });

Route::prefix('member')
    ->name('member.')
    ->middleware(['auth', 'role:member'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profiles', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profiles', [ProfileController::class, 'store'])->name('profile.store');
    });

require __DIR__ . '/settings.php';
