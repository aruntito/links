<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\ProfileLink;
use App\Enums\ThemeType;
use App\Enums\LinkType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@titora.co.in',
            'password' => bcrypt('password'),
        ]);

        $profiles = [
            [
                'name' => 'Arun',
                'slug' => 'arun',
                'headline' => 'Founder of TITORA',
                'theme' => ThemeType::DEFAULT->value,
            ],
            [
                'name' => 'TITORA',
                'slug' => 'titora',
                'headline' => 'Premium SaaS Platform',
                'theme' => ThemeType::TITORA->value,
            ],
            [
                'name' => 'DOOB',
                'slug' => 'doob',
                'headline' => 'DOOB Platform',
                'theme' => ThemeType::DOOB->value,
            ],
            [
                'name' => 'KARADAVI',
                'slug' => 'karadavi',
                'headline' => 'KARADAVI Brand',
                'theme' => ThemeType::KARADAVI->value,
            ],
            [
                'name' => 'SMXM',
                'slug' => 'smxm',
                'headline' => 'SMXM Platform',
                'theme' => ThemeType::SMXM->value,
            ],
        ];

        foreach ($profiles as $profileData) {
            $profile = Profile::create($profileData);
            
            ProfileLink::create([
                'profile_id' => $profile->id,
                'title' => 'Visit Website',
                'url' => 'https://example.com',
                'type' => LinkType::WEBSITE->value,
                'sort_order' => 1,
            ]);
            ProfileLink::create([
                'profile_id' => $profile->id,
                'title' => 'Follow on Instagram',
                'url' => 'https://instagram.com',
                'type' => LinkType::INSTAGRAM->value,
                'sort_order' => 2,
            ]);
        }
    }
}
