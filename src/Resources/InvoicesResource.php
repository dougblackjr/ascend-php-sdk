<?php

namespace AscendSDK\Resources;

/**
 * Invoices Resource
 * 
 * Handles all invoices related API operations.
 */
class InvoicesResource extends Resource
{

    /**
     * List Invoices
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listInvoices(array $params = []): array
    {
        return $this->httpGet("/v1/invoices", $params);
    }

    /**
     * Create invoice
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createInvoice(array $data): array
    {
        return $this->httpPost("/v1/invoices", $data);
    }

    /**
     * Get Invoice
     *
     * @param string $id The invoice identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/invoices/{$id}");
    }

    /**
     * Update invoice
     *
     * @param string $id The invoice identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateInvoice(string $id, array $data): array
    {
        return $this->httpPatch("/v1/invoices/{$id}", $data);
    }

    /**
     * Void invoice
     *
     * @param string $id The invoice identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function voidInvoice(string $id): array
    {
        return $this->httpDelete("/v1/invoices/{$id}");
    }
}
