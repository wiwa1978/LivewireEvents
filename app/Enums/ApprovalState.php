<?php

namespace App\Enums;



enum ApprovalState: string 
{
    case Approved = 'Approved';
    case InReview = 'InReview';
    case NotApproved = 'NotApproved';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Approved => 'Approved',
            self::InReview => 'InReview',
            self::NotApproved => 'NotApproved',
        };
    }
}
