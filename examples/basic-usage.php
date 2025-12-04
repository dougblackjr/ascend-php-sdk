<?php

require_once __DIR__ . '/../vendor/autoload.php';

use AscendSDK\AscendClient;
use AscendSDK\Exceptions\AscendException;

// Initialize the client
$ascend = new AscendClient(
    apiKey: getenv('ASCEND_API_KEY') ?: 'your_api_key',
    environment: 'sandbox',
    timeout: 30
);

// Example 1: List Programs
echo "=== Listing Programs ===\n";
try {
    $programs = $ascend->programs()->listPrograms([
        'page' => 1,
    ]);
    
    echo "Found " . count($programs['data'] ?? []) . " programs\n";
    print_r($programs);
} catch (AscendException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Status Code: " . $e->getStatusCode() . "\n";
}

// Example 2: Create a Contact
echo "\n=== Creating Contact ===\n";
try {
    $contact = $ascend->contacts()->create([
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john.doe@example.com',
        'phone' => '+1234567890',
    ]);
    
    echo "Contact created with ID: " . ($contact['id'] ?? 'unknown') . "\n";
    print_r($contact);
} catch (AscendException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// Example 3: Get a Specific Program
echo "\n=== Getting Program ===\n";
try {
    $programId = 'prog_123'; // Replace with actual ID
    $program = $ascend->programs()->get($programId);
    
    echo "Program details:\n";
    print_r($program);
} catch (AscendException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// Example 4: Create an Invoice
echo "\n=== Creating Invoice ===\n";
try {
    $invoice = $ascend->invoices()->createInvoice([
        'program_id' => 'prog_123', // Replace with actual ID
        'amount' => 100000, // $1,000.00 in cents
        'due_date' => '2025-02-15',
        'description' => 'Monthly premium',
    ]);
    
    echo "Invoice created with ID: " . ($invoice['id'] ?? 'unknown') . "\n";
    print_r($invoice);
} catch (AscendException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// Example 5: List Insureds
echo "\n=== Listing Insureds ===\n";
try {
    $insureds = $ascend->insureds()->listInsureds([
        'page' => 1,
    ]);
    
    echo "Found " . count($insureds['data'] ?? []) . " insureds\n";
    print_r($insureds);
} catch (AscendException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

