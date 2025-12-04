<?php

namespace AscendSDK\Resources;

/**
 * Users Resource
 * 
 * Handles all users related API operations.
 */
class UsersResource extends Resource
{

    /**
     * List Users
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listUsers(array $params = []): array
    {
        return $this->httpGet("/v1/users", $params);
    }

    /**
     * Create User
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createUser(array $data): array
    {
        return $this->httpPost("/v1/users", $data);
    }

    /**
     * Get User
     *
     * @param string $id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/users/{$id}");
    }

    /**
     * Update User
     *
     * @param string $id 
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateUser(string $id, array $data): array
    {
        return $this->httpPatch("/v1/users/{$id}", $data);
    }
}
