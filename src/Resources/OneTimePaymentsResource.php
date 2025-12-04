<?php

namespace AscendSDK\Resources;

/**
 * OneTimePayments Resource
 * 
 * Handles all onetimepayments related API operations.
 */
class OneTimePaymentsResource extends Resource
{

    /**
     * List One Time Payments
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listOneTimePayments(array $params = []): array
    {
        return $this->httpGet("/v1/one_time_payments", $params);
    }

    /**
     * Create One Time Payment
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createOneTimePayment(array $data): array
    {
        return $this->httpPost("/v1/one_time_payments", $data);
    }

    /**
     * Get One Time Payment
     *
     * @param string $id The one time payment identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id): array
    {
        return $this->httpGet("/v1/one_time_payments/{$id}");
    }

    /**
     * Update One Time Payment
     *
     * @param string $id The one time payment identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateOneTimePayment(string $id, array $data): array
    {
        return $this->httpPatch("/v1/one_time_payments/{$id}", $data);
    }

    /**
     * Void One Time Payment
     *
     * @param string $id The one time payment identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function voidOneTimePayment(string $id): array
    {
        return $this->httpDelete("/v1/one_time_payments/{$id}");
    }

    /**
     * Notify User
     *
     * @param string $id The id of the one_time_payment
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function sendOneTimePaymentReminder(string $id): array
    {
        return $this->httpPost("/v1/one_time_payments/{$id}/send");
    }
}
