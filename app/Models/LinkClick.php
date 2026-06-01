<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LinkClick extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'profile_link_id',
        'ip_address',
        'referrer',
        'user_agent',
    ];

    public function link(): BelongsTo
    {
        return $this->belongsTo(ProfileLink::class, 'profile_link_id');
    }
}
