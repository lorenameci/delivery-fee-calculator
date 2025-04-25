<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculateDeliveryFeeRequest;
use App\Services\DeliveryFeeService;
use Illuminate\Http\JsonResponse;

class DeliveryFeeController extends Controller
{
    public function __construct(
        protected DeliveryFeeService $deliveryFeeService
    ) {}

    /**
     * Calculate the delivery fee.
     *
     * @param CalculateDeliveryFeeRequest $request
     * @return JsonResponse
     */
    public function calculate(CalculateDeliveryFeeRequest $request): JsonResponse
    {
        $fee = $this->deliveryFeeService->calculate($request->validated());
        return response()->json(['fee' => $fee]);
    }
}
