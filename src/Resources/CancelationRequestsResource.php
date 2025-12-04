<?php

namespace AscendSDK\Resources;

/**
 * CancelationRequests Resource
 * 
 * Handles all cancelationrequests related API operations.
 */
class CancelationRequestsResource extends Resource
{

    /**
     * List Cancelation Requests
     *
     * @param string $billable_id The billable identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $billable_id): array
    {
        return $this->httpGet("/v1/billables/{$billable_id}/cancelations");
    }

    /**
     * Create a Cancelation Request
     *
     * @param string $billable_id The billable identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createCancelationRequest(string $billable_id, array $data): array
    {
        return $this->httpPost("/v1/billables/{$billable_id}/cancelations", $data);
    }

    /**
     * Get a Cancelation Request
     *
     * @param string $billable_id The billable identifier
     * @param string $id The cancelation request identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $billable_id, string $id): array
    {
        return $this->httpGet("/v1/billables/{$billable_id}/cancelations/{$id}");
    }

    /**
     * Update a Cancelation Request
     *
     * @param string $billable_id The billable identifier
     * @param string $id The cancelation request identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateCancelationRequest(string $billable_id, string $id, array $data): array
    {
        return $this->httpPatch("/v1/billables/{$billable_id}/cancelations/{$id}", $data);
    }
}
