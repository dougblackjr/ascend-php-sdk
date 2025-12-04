<?php

namespace AscendSDK\Resources;

/**
 * CancelationReturns Resource
 * 
 * Handles all cancelationreturns related API operations.
 */
class CancelationReturnsResource extends Resource
{

    /**
     * List Cancelation Returns
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function list(array $params = []): array
    {
        return $this->httpGet("/v1/cancelation_returns", $params);
    }

    /**
     * Create Cancelation Return
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createCancelationReturns(array $data): array
    {
        return $this->httpPost("/v1/cancelation_returns", $data);
    }

    /**
     * Get Cancelation Return
     *
     * @param string $id The cancelation return identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/cancelation_returns/{$id}");
    }

    /**
     * Update Cancelation Returns
     *
     * @param string $id The cancelation return identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateCancelationReturn(string $id, array $data): array
    {
        return $this->httpPatch("/v1/cancelation_returns/{$id}", $data);
    }
}
