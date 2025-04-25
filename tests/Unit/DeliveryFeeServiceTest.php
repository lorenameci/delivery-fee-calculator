<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\DeliveryFeeService;
use App\Services\DeliveryTypes\DeliveryTypeStrategyFactory;

class DeliveryFeeServiceTest extends TestCase
{
    /**
     * Fee Calculation Test.
     */
    public function test_fee_calculation_for_kyiv_express()
    {
        $service = new DeliveryFeeService(new DeliveryTypeStrategyFactory());

        $result = $service->calculate([
            'destination' => 'kyiv',
            'weight' => 3.5,
            'delivery_type' => 'express',
        ]);

        $this->assertEquals(103.5, $result);
    }
}
