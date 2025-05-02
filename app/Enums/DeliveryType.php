<?php

namespace App\Enums;

enum DeliveryType: string
{
    case STANDARD = 'standard';
    case EXPRESS = 'express';
    case OVERNIGHT = 'overnight';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
