<?php

namespace AscendSDK\Resources;

/**
 * Attachments Resource
 * 
 * Handles all attachments related API operations.
 */
class AttachmentsResource extends Resource
{

    /**
     * Create attachment
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createAttachment(array $data): array
    {
        return $this->httpPost("/v1/attachments", $data);
    }

    /**
     * Get attachment
     *
     * @param string $id The attachment identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/attachments/{$id}");
    }

    /**
     * Delete Attachments
     *
     * @param string $id The attachment identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function delete(string $id): array
    {
        return $this->httpDelete("/v1/attachments/{$id}");
    }
}
