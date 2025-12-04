<?php

namespace AscendSDK\Resources;

/**
 * Loans Resource
 * 
 * Handles all loans related API operations.
 */
class LoansResource extends Resource
{

    /**
     * List Loans
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listLoans(array $params = []): array
    {
        return $this->httpGet("/v1/loans", $params);
    }

    /**
     * Get Loan
     *
     * @param string $id The loan identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/loans/{$id}");
    }
}
