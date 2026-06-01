<?php

namespace App\Enums;

enum LinkType: string
{
    case WEBSITE = 'website';
    case SOCIAL = 'social';
    case WHATSAPP = 'whatsapp';
    case EMAIL = 'email';
    case YOUTUBE = 'youtube';
    case INSTAGRAM = 'instagram';
    case CUSTOM = 'custom';

    public function label(): string
    {
        return match ($this) {
            self::WEBSITE => 'Website',
            self::SOCIAL => 'Social Profile',
            self::WHATSAPP => 'WhatsApp',
            self::EMAIL => 'Email',
            self::YOUTUBE => 'YouTube',
            self::INSTAGRAM => 'Instagram',
            self::CUSTOM => 'Custom',
        };
    }
}
