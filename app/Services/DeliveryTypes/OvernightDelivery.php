<?php

namespace App\Services\DeliveryTypes;

class OvernightDelivery implements DeliveryTypeInterface
{

    /**
     * Get overnight delivery fee
     *
     * @return float
     */
    public function getBaseFee(): float
    {
        return 155.0;
    }
}
