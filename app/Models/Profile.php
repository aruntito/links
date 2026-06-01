<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    protected $fillable = [
        'slug',
        'name',
        'headline',
        'bio',
        'avatar',
        'avatar_alt',
        'theme',
        'theme_config',
        'is_verified',
        'social_links_json',
        'seo_title',
        'seo_description',
        'is_active',
    ];

    protected $casts = [
        'theme_config' => 'array',
        'social_links_json' => 'array',
        'is_verified' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function links(): HasMany
    {
        return $this->hasMany(ProfileLink::class)->orderBy('sort_order');
    }
}
