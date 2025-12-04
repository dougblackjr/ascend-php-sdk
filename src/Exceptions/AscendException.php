<?php

namespace AscendSDK\Exceptions;

use Exception;

class AscendException extends Exception
{
    private int $statusCode;
    private string $responseBody;

    public function __construct(string $message, int $statusCode = 0, string $responseBody = '')
    {
        parent::__construct($message);
        $this->statusCode = $statusCode;
        $this->responseBody = $responseBody;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getResponseBody(): string
    {
        return $this->responseBody;
    }

    public function getResponseArray(): array
    {
        return json_decode($this->responseBody, true) ?? [];
    }
}
