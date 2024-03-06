<?php

namespace App\Enums;



enum AnimalType: string 
{
    case Dog = 'Dog';
    case Cat = 'Cat';
    case Other = 'Other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Dog => 'Dog',
            self::Cat => 'Cat',
            self::Other => 'Other',
        };
    }
}
