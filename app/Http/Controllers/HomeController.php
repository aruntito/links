<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profiles = Profile::where('is_active', true)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('home.index', [
            'profiles' => $profiles,
        ]);
    }
}
