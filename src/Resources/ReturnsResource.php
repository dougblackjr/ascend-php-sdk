<?php

namespace AscendSDK\Resources;

/**
 * Returns Resource
 * 
 * Handles all returns related API operations.
 */
class ReturnsResource extends Resource
{

    /**
     * Get returns
     *
     * @param string $installment_plan_id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function installmentPlansIndex(string $installment_plan_id): array
    {
        return $this->httpGet("/v1/installment_plans/{$installment_plan_id}/returns");
    }

    /**
     * Create a return
     *
     * @param string $installment_plan_id 
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function installmentPlansCreate(string $installment_plan_id, array $data): array
    {
        return $this->httpPost("/v1/installment_plans/{$installment_plan_id}/returns", $data);
    }

    /**
     * Get a return
     *
     * @param string $installment_plan_id 
     * @param string $return_id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function installmentPlansGet(string $installment_plan_id, string $return_id): array
    {
        return $this->httpGet("/v1/installment_plans/{$installment_plan_id}/returns/{$return_id}");
    }

    /**
     * Update a return
     *
     * @param string $installment_plan_id 
     * @param string $return_id 
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function installmentPlansUpdate(string $installment_plan_id, string $return_id, array $data): array
    {
        return $this->httpPatch("/v1/installment_plans/{$installment_plan_id}/returns/{$return_id}", $data);
    }

    /**
     * Void return
     *
     * @param string $installment_plan_id 
     * @param string $return_id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function installmentPlansUelete(string $installment_plan_id, string $return_id): array
    {
        return $this->httpDelete("/v1/installment_plans/{$installment_plan_id}/returns/{$return_id}");
    }

    /**
     * Get returns
     *
     * @param string $one_time_payment_id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function oneTimePaymentIndex(string $one_time_payment_id): array
    {
        return $this->httpGet("/v1/one_time_payments/{$one_time_payment_id}/returns");
    }

    /**
     * Create a return
     *
     * @param string $one_time_payment_id 
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function oneTimePaymentCreate(string $one_time_payment_id, array $data): array
    {
        return $this->httpPost("/v1/one_time_payments/{$one_time_payment_id}/returns", $data);
    }

    /**
     * Get a return
     *
     * @param string $one_time_payment_id 
     * @param string $return_id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function oneTimePaymentGet(string $one_time_payment_id, string $return_id): array
    {
        return $this->httpGet("/v1/one_time_payments/{$one_time_payment_id}/returns/{$return_id}");
    }

    /**
     * Update a return
     *
     * @param string $one_time_payment_id 
     * @param string $return_id 
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function oneTimePaymentUpdate(string $one_time_payment_id, string $return_id, array $data): array
    {
        return $this->httpPatch("/v1/one_time_payments/{$one_time_payment_id}/returns/{$return_id}", $data);
    }

    /**
     * Void return
     *
     * @param string $one_time_payment_id 
     * @param string $return_id 
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function oneTimePaymentDelete(string $one_time_payment_id, string $return_id): array
    {
        return $this->httpDelete("/v1/one_time_payments/{$one_time_payment_id}/returns/{$return_id}");
    }

    /**
     * List Cancelation Returns
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function list(array $params = []): array
    {
        return $this->httpGet("/v1/returns", $params);
    }

    /**
     * Create Return
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createReturn(array $data): array
    {
        return $this->httpPost("/v1/returns", $data);
    }

    /**
     * Get a Return
     *
     * @param string $id The cancelation return identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/returns/{$id}");
    }

    /**
     * Update Cancelation Returns
     *
     * @param string $id The cancelation return identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateReturn(string $id, array $data): array
    {
        return $this->httpPatch("/v1/returns/{$id}", $data);
    }

    /**
     * Delete a Cancelation Return
     *
     * @param string $id The cancelation return identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function delete(string $id): array
    {
        return $this->httpDelete("/v1/returns/{$id}");
    }
}
