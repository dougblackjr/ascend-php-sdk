<?php

namespace AscendSDK\Resources;

/**
 * Carriers Resource
 * 
 * Handles all carriers related API operations.
 */
class CarriersResource extends Resource
{

    /**
     * List Carriers
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listCarriers(array $params = []): array
    {
        return $this->httpGet("/v1/carriers", $params);
    }
}
