<?php

namespace App\Services\DeliveryTypes;

interface DeliveryTypeInterface
{

    /**
     * Get the base fee for the delivery type.
     *
     * @return float
     */
    public function getBaseFee(): float;
}
