<?php

namespace AscendSDK\Resources;

/**
 * Programs Resource
 * 
 * Handles all programs related API operations.
 */
class ProgramsResource extends Resource
{

    /**
     * List Programs
     *
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function listPrograms(array $params = []): array
    {
        return $this->httpGet("/v1/programs", $params);
    }

    /**
     * Create Program
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createProgram(array $data): array
    {
        return $this->httpPost("/v1/programs", $data);
    }

    /**
     * Get Program
     *
     * @param string $id The program identifier
     * @param array $params Query parameters
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function get(string $id, array $params = []): array
    {
        return $this->httpGet("/v1/programs/{$id}", $params);
    }

    /**
     * Update program
     *
     * @param string $id The program identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function updateProgram(string $id, array $data): array
    {
        return $this->httpPatch("/v1/programs/{$id}", $data);
    }

    /**
     * Archive Program
     *
     * @param string $id The program identifier
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function delete(string $id): array
    {
        return $this->httpDelete("/v1/programs/{$id}");
    }

    /**
     * Notify User
     *
     * @param string $id the id of the program
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function notifyInsured(string $id): array
    {
        return $this->httpPost("/v1/programs/{$id}/send");
    }

    /**
     * Unarchive program
     *
     * @param string $id The id of the program
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function unarchiveProgram(string $id): array
    {
        return $this->httpPost("/v1/programs/{$id}/unarchive");
    }

    /**
     * Loan Payoff Estimate
     *
     * @param string $id the id of the program
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createLoanPayoffEstimate(string $id): array
    {
        return $this->httpPost("/v1/programs/{$id}/loan_payoff_estimate");
    }
}
