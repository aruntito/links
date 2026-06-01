<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirect(string $id, Request $request)
    {
        $profiles = config('profiles', []);
        
        $targetLink = null;
        
        foreach ($profiles as $profile) {
            foreach ($profile['links'] ?? [] as $link) {
                if (isset($link['id']) && $link['id'] === $id) {
                    $targetLink = $link;
                    break 2;
                }
            }
        }

        if (!$targetLink || empty($targetLink['url'])) {
            abort(404);
        }

        return redirect()->away($targetLink['url']);
    }
}
