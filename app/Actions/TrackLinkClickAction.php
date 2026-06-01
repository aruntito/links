<?php

namespace App\Actions;

use App\Models\ProfileLink;
use App\Models\LinkClick;
use Illuminate\Http\Request;

class TrackLinkClickAction
{
    public function execute(ProfileLink $link, Request $request): LinkClick
    {
        return LinkClick::create([
            'profile_link_id' => $link->id,
            'ip_address' => $request->ip(),
            'referrer' => $request->header('referer'),
            'user_agent' => $request->userAgent(),
        ]);
    }
}
