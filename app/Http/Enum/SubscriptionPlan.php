<?php

namespace App\Http\enum ;


enum SubscriptionPlan : string
{
    case Starter = 'starter';
    case Exclusive = 'Exclusive';
    case Premium = 'Premium';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
   
    }
}