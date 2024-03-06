<?php

namespace App\Enums;



enum AnimalPublishState: string
{
    case Draft = 'Draft';
    case Published = 'Published';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Published => 'Published',
        };
    }
}
