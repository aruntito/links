Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/debug', function () {
    return response()->json([
        'smxm' => config('profiles.smxm'),
        'routes_loaded' => true,
    ]);
});

Route::get('/r/{link}', [RedirectController::class, 'redirect'])->name('links.redirect');

// Wildcard route MUST be last!
Route::get('/{slug}', [ProfileController::class, 'show'])->name('profile.show');