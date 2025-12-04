<?php

namespace AscendSDK\Resources;

/**
 * Refunds Resource
 * 
 * Handles all refunds related API operations.
 */
class RefundsResource extends Resource
{

    /**
     * List Refunds
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function list(array $params = []): array
    {
        return $this->httpGet("/v1/refunds", $params);
    }
}
