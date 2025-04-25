<?php

namespace App\Services;

use App\Services\DeliveryTypes\DeliveryTypeStrategyFactory;

class DeliveryFeeService
{
    
    public function __construct(
        protected DeliveryTypeStrategyFactory $strategyFactory
    ) {}
    
    /**
     * Calculate the delivery fee based on the input data.
     * 
     * @param array $data
     * @return float
     */
    public function calculate(array $data): float
    {
        $strategy = $this->strategyFactory->make($data['delivery_type']);
        $fee = $strategy->getBaseFee();

        if ($data['weight'] > 2) {
            $fee += ($data['weight'] - 2) * 10;
        }

        if (strtolower($data['destination']) === 'kyiv') {
            $fee *= 0.9; // Apply 10% discount
        }

        return round($fee, 2);
    }
}
