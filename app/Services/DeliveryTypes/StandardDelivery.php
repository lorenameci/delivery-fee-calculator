<?php

namespace App\Services\DeliveryTypes;

class StandardDelivery implements DeliveryTypeInterface
{

    /**
     * Get standard delivery fee
     *
     * @return float
    */

    public function getBaseFee(): float
    {
        return 50.0;
    }
}
