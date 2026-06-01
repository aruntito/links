<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AvatarUploadService
{
    /**
     * Uploads an avatar and returns the path.
     * Ready for S3 migration in the future without touching Filament logic.
     */
    public function upload(UploadedFile $file, string $directory = 'avatars'): string
    {
        return $file->store($directory, 'public');
    }

    /**
     * Deletes an avatar.
     */
    public function delete(?string $path): bool
    {
        if (!$path) {
            return true;
        }

        return Storage::disk('public')->delete($path);
    }
}
