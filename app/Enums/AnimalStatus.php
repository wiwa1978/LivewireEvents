<?php

namespace App\Enums;



enum AnimalStatus: string 
{
    case adopted = 'Adopted';
    case adoptable = 'Adoptable';
    case reserved = 'Reserved';
    case pending_treatment = 'Pending treatment';
    case notadoptable = 'Not Adoptable';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::adopted => 'Adopted',
            self::adoptable => 'Adoptable',
            self::reserved => 'Reserved',
            self::pending_treatment => 'Pending treatment',
            self::notadoptable => 'Not adoptable',
        };
    }
}
