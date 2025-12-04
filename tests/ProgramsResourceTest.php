<?php

namespace AscendSDK\Tests;

use AscendSDK\AscendClient;
use AscendSDK\Resources\ProgramsResource;
use AscendSDK\Exceptions\AscendException;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class ProgramsResourceTest extends TestCase
{
    private function createMockClient(array $responses): Client
    {
        $mock = new MockHandler($responses);
        $handlerStack = HandlerStack::create($mock);
        
        return new Client([
            'handler' => $handlerStack,
            'headers' => [
                'Authorization' => 'Bearer test_key',
                'Content-Type' => 'application/json',
            ],
        ]);
    }
    
    private function createAscendClient(Client $mockClient): AscendClient
    {
        $ascend = new AscendClient('test_key', 'sandbox');
        
        // Use reflection to inject mock client
        $reflection = new ReflectionClass($ascend);
        $property = $reflection->getProperty('httpClient');
        $property->setAccessible(true);
        $property->setValue($ascend, $mockClient);
        
        return $ascend;
    }
    
    public function testListPrograms(): void
    {
        $mockClient = $this->createMockClient([
            new Response(200, [], json_encode([
                'data' => [
                    ['id' => 'prog_123', 'status' => 'active'],
                    ['id' => 'prog_456', 'status' => 'pending'],
                ],
                'has_more' => false,
            ])),
        ]);
        
        $ascend = $this->createAscendClient($mockClient);
        $result = $ascend->programs()->listPrograms();
        
        $this->assertIsArray($result);
        $this->assertArrayHasKey('data', $result);
        $this->assertCount(2, $result['data']);
        $this->assertEquals('prog_123', $result['data'][0]['id']);
    }
    
    public function testGetProgram(): void
    {
        $mockClient = $this->createMockClient([
            new Response(200, [], json_encode([
                'id' => 'prog_123',
                'status' => 'active',
                'insured_id' => 'ins_789',
            ])),
        ]);
        
        $ascend = $this->createAscendClient($mockClient);
        $result = $ascend->programs()->get('prog_123');
        
        $this->assertIsArray($result);
        $this->assertEquals('prog_123', $result['id']);
        $this->assertEquals('active', $result['status']);
    }
    
    public function testCreateProgram(): void
    {
        $mockClient = $this->createMockClient([
            new Response(201, [], json_encode([
                'id' => 'prog_new',
                'status' => 'pending',
                'insured_id' => 'ins_123',
            ])),
        ]);
        
        $ascend = $this->createAscendClient($mockClient);
        $result = $ascend->programs()->createProgram([
            'insured_id' => 'ins_123',
            'carrier_id' => 'car_456',
        ]);
        
        $this->assertIsArray($result);
        $this->assertEquals('prog_new', $result['id']);
    }
    
    public function testUpdateProgram(): void
    {
        $mockClient = $this->createMockClient([
            new Response(200, [], json_encode([
                'id' => 'prog_123',
                'status' => 'active',
            ])),
        ]);
        
        $ascend = $this->createAscendClient($mockClient);
        $result = $ascend->programs()->updateProgram('prog_123', [
            'status' => 'active',
        ]);
        
        $this->assertIsArray($result);
        $this->assertEquals('prog_123', $result['id']);
        $this->assertEquals('active', $result['status']);
    }
    
    public function testDeleteProgram(): void
    {
        $mockClient = $this->createMockClient([
            new Response(204, [], ''),
        ]);
        
        $ascend = $this->createAscendClient($mockClient);
        $result = $ascend->programs()->delete('prog_123');
        
        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }
    
    public function testApiException(): void
    {
        $this->expectException(AscendException::class);
        $this->expectExceptionMessage('Not Found');
        
        $mockClient = $this->createMockClient([
            new RequestException(
                'Not Found',
                new Request('GET', 'test'),
                new Response(404, [], json_encode(['error' => 'Program not found']))
            ),
        ]);
        
        $ascend = $this->createAscendClient($mockClient);
        $ascend->programs()->get('invalid_id');
    }
}
