<?php

namespace AscendSDK\Resources;

/**
 * PaymentProposals Resource
 * 
 * Handles all paymentproposals related API operations.
 */
class PaymentProposalsResource extends Resource
{

    /**
     * Generate payment proposal document for a program
     *
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function createPaymentProposal(array $data): array
    {
        return $this->httpPost("/v1/payment_proposals", $data);
    }
}
