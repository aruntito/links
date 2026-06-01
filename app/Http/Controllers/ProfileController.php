<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(string $slug)
    {
        $profile = Profile::with(['links' => function ($query) {
            $query->where('is_active', true)->orderBy('sort_order', 'asc');
        }])
        ->where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

        $theme = $profile->theme ?? 'default';
        if (!view()->exists("themes.{$theme}.show")) {
            $theme = 'default';
        }

        return view("themes.{$theme}.show", [
            'profile' => $profile,
        ]);
    }
}
