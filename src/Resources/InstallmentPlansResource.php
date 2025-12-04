<?php

namespace AscendSDK\Resources;

/**
 * InstallmentPlans Resource
 * 
 * Handles all installmentplans related API operations.
 */
class InstallmentPlansResource extends Resource
{

    /**
     * Get installment plan
     *
     * @param string $id The id of the installment plan
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/installment_plans/{$id}");
    }

    /**
     * Archive Installment Plan
     *
     * @param string $id The id of the installment plan
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function archiveInstallmentPlan(string $id): array
    {
        return $this->httpDelete("/v1/installment_plans/{$id}");
    }

    /**
     * Update Installment Plan
     *
     * @param string $id The id of the installment plan
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateInstallmentPlan(string $id, array $data): array
    {
        return $this->httpPatch("/v1/installment_plans/{$id}", $data);
    }

    /**
     * Create installment plan
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function create(array $data): array
    {
        return $this->httpPost("/v1/installment_plans", $data);
    }

    /**
     * Cancel Installment Plan
     *
     * @param string $id The id of the installment plan
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function cancelInstallmentPlan(string $id): array
    {
        return $this->httpPost("/v1/installment_plans/{$id}/cancel");
    }

    /**
     * Notify User
     *
     * @param string $id The id of the installment plan
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function sendInstallmentPlanReminder(string $id): array
    {
        return $this->httpPost("/v1/installment_plans/{$id}/send");
    }
}
