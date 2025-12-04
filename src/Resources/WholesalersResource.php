<?php

namespace AscendSDK\Resources;

/**
 * Wholesalers Resource
 * 
 * Handles all wholesalers related API operations.
 */
class WholesalersResource extends Resource
{

    /**
     * List Wholesalers
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listWholesalers(array $params = []): array
    {
        return $this->httpGet("/v1/wholesalers", $params);
    }
}
