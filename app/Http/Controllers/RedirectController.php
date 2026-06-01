<?php

namespace App\Http\Controllers;

use App\Actions\TrackLinkClickAction;
use App\Models\ProfileLink;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirect(string $id, Request $request, TrackLinkClickAction $trackAction)
    {
        $link = ProfileLink::with('profile')
            ->where('id', $id)
            ->where('is_active', true)
            ->firstOrFail();

        // 404 if parent profile is inactive
        if (!$link->profile || !$link->profile->is_active) {
            abort(404);
        }

        $trackAction->execute($link, $request);

        return redirect()->away($link->url);
    }
}
