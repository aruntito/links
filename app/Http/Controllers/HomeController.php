<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profilesData = config('profiles', []);
        
        $profiles = collect($profilesData)->map(function ($profileData) {
            $profile = (object) $profileData;
            $profile->links = collect($profileData['links'])->map(function ($link) {
                return (object) $link;
            });
            return $profile;
        });

        return view('home.index', [
            'profiles' => $profiles,
        ]);
    }
}
