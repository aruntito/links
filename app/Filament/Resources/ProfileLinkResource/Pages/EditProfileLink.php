<?php

namespace App\Filament\Resources\ProfileLinkResource\Pages;

use App\Filament\Resources\ProfileLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfileLink extends EditRecord
{
    protected static string $resource = ProfileLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
