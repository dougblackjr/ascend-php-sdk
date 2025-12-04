# Quick Start Guide

Get up and running with the Ascend PHP SDK in minutes.

## Installation

```bash
composer require your-vendor/ascend-php-sdk
```

## Basic Setup

### 1. Get Your API Key

Sign up at [useascend.com](https://useascend.com) and get your API key from the dashboard.

### 2. Initialize the Client

```php
<?php

require_once 'vendor/autoload.php';

use AscendSDK\AscendClient;

$ascend = new AscendClient(
    apiKey: 'your_api_key_here',
    environment: 'sandbox', // Use 'production' for live
    timeout: 30
);
```

### 3. Make Your First API Call

```php
// List all programs
$programs = $ascend->programs()->listPrograms();

foreach ($programs['data'] as $program) {
    echo "Program: {$program['id']}\n";
}
```

## Laravel Setup

### 1. Install the Package

```bash
composer require your-vendor/ascend-php-sdk
```

### 2. Publish Config

```bash
php artisan vendor:publish --provider="AscendSDK\AscendServiceProvider"
```

### 3. Configure Environment

Add to your `.env`:

```env
ASCEND_API_KEY=your_api_key_here
ASCEND_ENVIRONMENT=sandbox
```

### 4. Use the Facade

```php
use AscendSDK\Facades\Ascend;

Route::get('/programs', function () {
    $programs = Ascend::programs()->listPrograms();
    return view('programs.index', compact('programs'));
});
```

## Common Operations

### Create a Contact

```php
$contact = $ascend->contacts()->create([
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@example.com',
    'phone' => '+1234567890',
]);

echo "Contact ID: {$contact['id']}\n";
```

### Create a Program

```php
$program = $ascend->programs()->createProgram([
    'insured_id' => 'ins_123',
    'carrier_id' => 'car_456',
    'policy_number' => 'POL-2025-001',
    'effective_date' => '2025-01-01',
]);
```

### Create an Invoice

```php
$invoice = $ascend->invoices()->createInvoice([
    'program_id' => 'prog_123',
    'amount' => 100000, // Amount in cents ($1,000.00)
    'due_date' => '2025-02-15',
    'description' => 'Monthly premium payment',
]);
```

### List with Pagination

```php
$page = 1;
do {
    $result = $ascend->invoices()->listInvoices([
        'page' => $page,
        'limit' => 20,
    ]);
    
    foreach ($result['data'] as $invoice) {
        echo "Invoice: {$invoice['id']} - \${$invoice['amount']}\n";
    }
    
    $page++;
} while ($result['has_more'] ?? false);
```

### Error Handling

```php
use AscendSDK\Exceptions\AscendException;

try {
    $program = $ascend->programs()->get('invalid_id');
} catch (AscendException $e) {
    echo "Error: {$e->getMessage()}\n";
    echo "Status: {$e->getStatusCode()}\n";
    
    // Get detailed error response
    $error = $e->getResponseArray();
    print_r($error);
}
```

## Next Steps

- Check out the [API Reference](API_REFERENCE.md) for all available methods
- See [examples/](examples/) for more code samples
- Read the [official API docs](https://developers.useascend.com/reference)

## Getting Help

- 📧 Email: support@useascend.com
- 💬 GitHub Issues: Report bugs or request features
- 📚 Documentation: https://developers.useascend.com

