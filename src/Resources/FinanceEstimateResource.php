<?php

namespace AscendSDK\Resources;

/**
 * FinanceEstimate Resource
 * 
 * Handles all financeestimate related API operations.
 */
class FinanceEstimateResource extends Resource
{

    /**
     * Create FinanceEstimate
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function create(array $data): array
    {
        return $this->httpPost("/v1/finance_estimates", $data);
    }
}
