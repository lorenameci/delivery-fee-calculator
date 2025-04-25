<?php

namespace App\Services\DeliveryTypes;

use App\Services\DeliveryTypes\StandardDelivery;
use App\Services\DeliveryTypes\ExpressDelivery;
use InvalidArgumentException;

class DeliveryTypeStrategyFactory
{
    
    /**
     * Creates delivery type instance.
     *
     * @param string $type
     * 
     * @return DeliveryTypeInterface
     * 
     * @throws InvalidArgumentException
    */
    public function make(string $type): DeliveryTypeInterface
    {
        return match($type) {
            'standard' => new StandardDelivery(),
            'express' => new ExpressDelivery(),
            default => throw new InvalidArgumentException("Unsupported delivery type: $type"),
        };
    }
}
