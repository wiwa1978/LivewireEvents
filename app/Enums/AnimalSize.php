<?php

namespace App\Enums;



enum AnimalSize: string 
{
    case small = 'Small';
    case medium = 'Medium';
    case large = 'Large';
    case verylarge = 'Very Large';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::small => 'Small',
            self::medium => 'Medium',
            self::large => 'Large',
            self::verylarge => 'Very Large',
        };
    }
}
