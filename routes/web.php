<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/r/{link}', [RedirectController::class, 'redirect'])->name('links.redirect');

// Wildcard route MUST be last!
Route::get('/{slug}', [ProfileController::class, 'show'])->name('profile.show');
