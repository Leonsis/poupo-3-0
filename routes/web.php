<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-use', [PageController::class, 'termsUse'])->name('terms.use');