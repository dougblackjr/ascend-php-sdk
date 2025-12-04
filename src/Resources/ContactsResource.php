<?php

namespace AscendSDK\Resources;

/**
 * Contacts Resource
 * 
 * Handles all contacts related API operations.
 */
class ContactsResource extends Resource
{

    /**
     * List Contacts
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function list(array $params = []): array
    {
        return $this->httpGet("/v1/contacts", $params);
    }

    /**
     * Create Contact
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function create(array $data): array
    {
        return $this->httpPost("/v1/contacts", $data);
    }

    /**
     * Get Contact
     *
     * @param string $id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/contacts/{$id}");
    }

    /**
     * Update contact
     *
     * @param string $id 
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function update(string $id, array $data): array
    {
        return $this->httpPatch("/v1/contacts/{$id}", $data);
    }
}
