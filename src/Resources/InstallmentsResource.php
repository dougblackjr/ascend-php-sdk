<?php

namespace AscendSDK\Resources;

/**
 * Installments Resource
 * 
 * Handles all installments related API operations.
 */
class InstallmentsResource extends Resource
{

    /**
     * Get installment
     *
     * @param string $id Id of the installment
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/installments/{$id}");
    }

    /**
     * Update installment
     *
     * @param string $id Id of the installment
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function update(string $id, array $data): array
    {
        return $this->httpPatch("/v1/installments/{$id}", $data);
    }
}
