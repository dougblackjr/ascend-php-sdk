<?php

namespace AscendSDK\Resources;

/**
 * OrganizationAccountUsers Resource
 * 
 * Handles all organizationaccountusers related API operations.
 */
class OrganizationAccountUsersResource extends Resource
{

    /**
     * List account users
     *
     * @param string $account_id 
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listOrgAccountUsers(string $account_id, array $params = []): array
    {
        return $this->httpGet("/v1/organization_accounts/{$account_id}/users", $params);
    }

    /**
     * Create account user
     *
     * @param string $account_id 
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createOrgAccountUser(string $account_id, array $data): array
    {
        return $this->httpPost("/v1/organization_accounts/{$account_id}/users", $data);
    }

    /**
     * Get account user
     *
     * @param string $account_id 
     * @param string $id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $account_id, string $id): array
    {
        return $this->httpGet("/v1/organization_accounts/{$account_id}/users/{$id}");
    }
}
