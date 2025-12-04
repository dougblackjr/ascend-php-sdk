<?php

namespace AscendSDK\Resources;

/**
 * BillableCancelations Resource
 * 
 * Handles all billablecancelations related API operations.
 */
class BillableCancelationsResource extends Resource
{

    /**
     * Initiate a cancelation for a billable
     *
     * @param string $id The billable identifier
     * @param array $data Request body data
     * @return array
     * @throws \AscendSDK\Exceptions\AscendException
     */
    public function cancelBillable(string $id, array $data): array
    {
        return $this->httpPost("/v1/billables/{$id}/cancelation", $data);
    }
}
