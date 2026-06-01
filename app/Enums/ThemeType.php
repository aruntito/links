<?php

namespace App\Enums;

enum ThemeType: string
{
    case DEFAULT = 'default';
    case TITORA = 'titora';
    case DOOB = 'doob';
    case KARADAVI = 'karadavi';
    case SMXM = 'smxm';

    public function label(): string
    {
        return match ($this) {
            self::DEFAULT => 'Default',
            self::TITORA => 'TITORA',
            self::DOOB => 'DOOB',
            self::KARADAVI => 'KARADAVI',
            self::SMXM => 'SMXM',
        };
    }
}
