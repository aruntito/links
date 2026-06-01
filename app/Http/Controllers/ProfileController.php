<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(string $slug)
    {
        $profileData = config("profiles.{$slug}");

        if (!$profileData) {
            abort(404);
        }

        // Convert array to object to maintain compatibility with Blade views
        $profile = (object) $profileData;
        
        // Convert links to a collection of objects
        $profile->links = collect($profileData['links'])->map(function ($link) {
            return (object) $link;
        });

        $theme = $profile->theme ?? 'default';
        if (!view()->exists("themes.{$theme}.show")) {
            $theme = 'default';
        }

        return view("themes.{$theme}.show", [
            'profile' => $profile,
        ]);
    }
}
