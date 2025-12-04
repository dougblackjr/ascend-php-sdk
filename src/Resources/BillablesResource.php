<?php

namespace AscendSDK\Resources;

/**
 * Billables Resource
 * 
 * Handles all billables related API operations.
 */
class BillablesResource extends Resource
{

    /**
     * List Billables
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listBillables(array $params = []): array
    {
        return $this->httpGet("/v1/billables", $params);
    }

    /**
     * Create Billable
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createBillable(array $data): array
    {
        return $this->httpPost("/v1/billables", $data);
    }

    /**
     * Get Billable
     *
     * @param string $id The billable identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/billables/{$id}");
    }

    /**
     * Update Billable
     *
     * @param string $id The billable identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateBillable(string $id, array $data): array
    {
        return $this->httpPatch("/v1/billables/{$id}", $data);
    }

    /**
     * Delete Billable
     *
     * @param string $id The billable identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function delete(string $id): array
    {
        return $this->httpDelete("/v1/billables/{$id}");
    }

    /**
     * Create Billables
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function bulkCreateBillables(array $data): array
    {
        return $this->httpPost("/v1/bulk_billables", $data);
    }
}
