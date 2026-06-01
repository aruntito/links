<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/r/{link}', [RedirectController::class, 'redirect'])->name('links.redirect');

// Wildcard route MUST be last!
Route::get('/{slug}', [ProfileController::class, 'show'])->name('profile.show');
