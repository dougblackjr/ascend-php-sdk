<?php

namespace AscendSDK\Resources;

/**
 * Payouts Resource
 * 
 * Handles all payouts related API operations.
 */
class PayoutsResource extends Resource
{

    /**
     * List Payouts
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listPayouts(array $params = []): array
    {
        return $this->httpGet("/v1/payouts", $params);
    }
}
