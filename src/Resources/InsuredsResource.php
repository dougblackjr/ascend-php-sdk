<?php

namespace AscendSDK\Resources;

/**
 * Insureds Resource
 * 
 * Handles all insureds related API operations.
 */
class InsuredsResource extends Resource
{

    /**
     * Create Insured
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createInsured(array $data): array
    {
        return $this->httpPost("/v1/insureds", $data);
    }

    /**
     * List Insureds
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listInsureds(array $params = []): array
    {
        return $this->httpGet("/v1/insureds", $params);
    }

    /**
     * Get Insured
     *
     * @param string $id The insured identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/insureds/{$id}");
    }

    /**
     * Delete Insured
     *
     * @param string $id The insured identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function delete(string $id): array
    {
        return $this->httpDelete("/v1/insureds/{$id}");
    }

    /**
     * Update Insured
     *
     * @param string $id The insured identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateInsured(string $id, array $data): array
    {
        return $this->httpPatch("/v1/insureds/{$id}", $data);
    }
}
