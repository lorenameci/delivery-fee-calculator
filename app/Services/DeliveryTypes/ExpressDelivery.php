<?php

namespace App\Services\DeliveryTypes;

class ExpressDelivery implements DeliveryTypeInterface
{

    /**
     * Get express delivery fee
     *
     * @return float
     */
    public function getBaseFee(): float
    {
        return 100.0;
    }
}
