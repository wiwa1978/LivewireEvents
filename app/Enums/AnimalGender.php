<?php

namespace App\Enums;



enum AnimalGender: string 
{
    case male = 'Male';
    case female = 'Female';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::male => 'Male',
            self::female => 'Female',
        };
    }
}
