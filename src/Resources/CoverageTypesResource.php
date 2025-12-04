<?php

namespace AscendSDK\Resources;

/**
 * CoverageTypes Resource
 * 
 * Handles all coveragetypes related API operations.
 */
class CoverageTypesResource extends Resource
{

    /**
     * List CoverageTypes
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listCoverageTypes(array $params = []): array
    {
        return $this->httpGet("/v1/coverage_types", $params);
    }
}
