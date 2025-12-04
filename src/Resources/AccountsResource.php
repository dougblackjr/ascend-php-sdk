<?php

namespace AscendSDK\Resources;

/**
 * Accounts Resource
 * 
 * Handles all accounts related API operations.
 */
class AccountsResource extends Resource
{

    /**
     * List Accounts
     *
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function list(): array
    {
        return $this->httpGet("/v1/accounts");
    }

    /**
     * Create Accounts
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function create(array $data): array
    {
        return $this->httpPost("/v1/accounts", $data);
    }

    /**
     * Get account
     *
     * @param string $id Account identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/accounts/{$id}");
    }

    /**
     * Update account
     *
     * @param string $id Account identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function update(string $id, array $data): array
    {
        return $this->httpPatch("/v1/accounts/{$id}", $data);
    }
}
