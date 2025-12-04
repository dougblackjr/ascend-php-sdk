<?php

namespace AscendSDK\Resources;

/**
 * PremiumReducingEndorsements Resource
 * 
 * Handles all premiumreducingendorsements related API operations.
 */
class PremiumReducingEndorsementsResource extends Resource
{

    /**
     * Create premium reducing endorsement
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function create(array $data): array
    {
        return $this->httpPost("/v1/premium_reducing_endorsements", $data);
    }

    /**
     * Show a premium reducing endorsement
     *
     * @param string $id Endorsement ID
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/premium_reducing_endorsements/{$id}");
    }

    /**
     * Update a premium reducing endorsement
     *
     * @param string $id Endorsement ID
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function update(string $id, array $data): array
    {
        return $this->httpPatch("/v1/premium_reducing_endorsements/{$id}", $data);
    }

    /**
     * delete premium reducing endorsement
     *
     * @param string $id Endorsement ID
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function delete(string $id): array
    {
        return $this->httpDelete("/v1/premium_reducing_endorsements/{$id}");
    }
}
