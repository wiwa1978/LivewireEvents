<?php

namespace App\Enums;



enum RoleNames: string 
{
    case super_admin = 'super_admin';
    case user = 'user';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::super_admin => 'super_admin',
            self::user => 'user',
        };
    }
}
