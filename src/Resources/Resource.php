<?php

namespace AscendSDK\Resources;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use AscendSDK\Exceptions\AscendException;

abstract class Resource
{
    protected Client $client;
    protected string $baseUrl;

    public function __construct(Client $client, string $baseUrl)
    {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    protected function httpGet(string $endpoint, array $query = []): array
    {
        return $this->request('GET', $endpoint, ['query' => $query]);
    }

    protected function httpPost(string $endpoint, array $data = [], array $options = []): array
    {
        $requestOptions = array_merge(['json' => $data], $options);
        return $this->request('POST', $endpoint, $requestOptions);
    }

    protected function httpPatch(string $endpoint, array $data = []): array
    {
        return $this->request('PATCH', $endpoint, ['json' => $data]);
    }

    protected function httpPut(string $endpoint, array $data = []): array
    {
        return $this->request('PUT', $endpoint, ['json' => $data]);
    }

    protected function httpDelete(string $endpoint): array
    {
        return $this->request('DELETE', $endpoint);
    }

    private function request(string $method, string $endpoint, array $options = []): array
    {
        try {
            $url = $this->baseUrl . $endpoint;
            $response = $this->client->request($method, $url, $options);
            
            $body = $response->getBody()->getContents();
            
            if (empty($body)) {
                return [];
            }
            
            return json_decode($body, true) ?? [];
        } catch (RequestException $e) {
            $statusCode = $e->getResponse() ? $e->getResponse()->getStatusCode() : 0;
            $responseBody = $e->getResponse() ? $e->getResponse()->getBody()->getContents() : '';
            
            throw new AscendException($e->getMessage(), $statusCode, $responseBody);
        }
    }
}
