# Ascend PHP SDK

Official PHP SDK for the [Ascend](https://useascend.com) insurance payments platform API.

## Features

- ✅ **Complete API Coverage**: All 93 API endpoints across 25 resources
- 🔐 **Secure Authentication**: Built-in API key management
- 🚀 **Laravel Integration**: Service provider, facade, and auto-discovery
- 🛡️ **Type Safety**: Full PHP 8.1+ type declarations
- 🔄 **Environment Support**: Sandbox and production environments
- 📦 **PSR-4 Compliant**: Modern autoloading standards
- 🎯 **Exception Handling**: Detailed error responses
- 📝 **Well Documented**: Comprehensive guides and examples

## Requirements

- PHP 8.1 or higher
- Composer
- Guzzle HTTP Client 7.5+

## Installation

Install via Composer:

```bash
composer require triplenerdscore/ascend-php-sdk
```

### Laravel Setup

1. Publish the configuration file:
```bash
php artisan vendor:publish --provider="AscendSDK\AscendServiceProvider"
```

2. Add your credentials to `.env`:
```env
ASCEND_API_KEY=your_api_key_here
ASCEND_ENVIRONMENT=sandbox
ASCEND_TIMEOUT=30
```

The service provider will be auto-discovered in Laravel 10+.

## Quick Start

### Basic Usage

```php
use AscendSDK\AscendClient;

$ascend = new AscendClient(
    apiKey: 'your_api_key',
    environment: 'sandbox', // or 'production'
    timeout: 30
);

// List programs
$programs = $ascend->programs()->listPrograms();

// Get a specific program
$program = $ascend->programs()->get('UUID');

// Create an invoice
$invoice = $ascend->invoices()->createInvoice([
    'program_id' => 'UUID',
    'amount' => 100000,
    'due_date' => '2025-01-31',
]);
```

### Laravel Usage

Using the Facade:

```php
use AscendSDK\Facades\Ascend;

// List programs
$programs = Ascend::programs()->listPrograms();

// Create a contact
$contact = Ascend::contacts()->create([
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@example.com',
]);
```

Using Dependency Injection:

```php
use AscendSDK\AscendClient;

class InsuranceController extends Controller
{
    public function __construct(private AscendClient $ascend)
    {
    }
    
    public function index()
    {
        $programs = $this->ascend->programs()->listPrograms();
        return view('insurance.index', compact('programs'));
    }
}
```

## Available Resources

The SDK provides access to the following resources:

- **Accounts** (4 operations)
- **Attachments** (3 operations)
- **BillableCancelations** (1 operations)
- **Billables** (6 operations)
- **CancelationRequests** (4 operations)
- **CancelationReturns** (4 operations)
- **Carriers** (1 operations)
- **Contacts** (4 operations)
- **CoverageTypes** (1 operations)
- **FinanceEstimate** (1 operations)
- **InstallmentPlans** (6 operations)
- **Installments** (2 operations)
- **Insureds** (5 operations)
- **Invoices** (5 operations)
- **Loans** (2 operations)
- **OneTimePayments** (6 operations)
- **OrganizationAccountUsers** (3 operations)
- **PaymentProposals** (1 operations)
- **Payouts** (1 operations)
- **PremiumReducingEndorsements** (4 operations)
- **Programs** (8 operations)
- **Refunds** (1 operations)
- **Returns** (15 operations)
- **Users** (4 operations)
- **Wholesalers** (1 operations)


## Resource Methods

### Programs

```php
// List all programs
$programs = $ascend->programs()->listPrograms([
    'page' => 1,
    'insured_id' => 'UUID',
]);

// Get a program
$program = $ascend->programs()->get('UUID');

// Create a program
$program = $ascend->programs()->createProgram([
    'insured_id' => 'UUID',
    'carrier_id' => 'UUID',
    // ... additional fields
]);

// Update a program
$program = $ascend->programs()->updateProgram('UUID', [
    'status' => 'active',
]);

// Archive a program
$ascend->programs()->delete('UUID');

// Unarchive a program
$ascend->programs()->unarchiveProgram('UUID');

// Send notification
$ascend->programs()->notifyInsured('UUID');

// Create loan payoff estimate
$estimate = $ascend->programs()->createLoanPayoffEstimate('UUID');
```

### Invoices

```php
// List invoices
$invoices = $ascend->invoices()->listInvoices(['page' => 1]);

// Get an invoice
$invoice = $ascend->invoices()->get('UUID');

// Create an invoice
$invoice = $ascend->invoices()->createInvoice([
    'program_id' => 'UUID',
    'amount' => 50000,
    'due_date' => '2025-02-15',
]);

// Update an invoice
$invoice = $ascend->invoices()->updateInvoice('UUID', [
    'amount' => 55000,
]);

// Void an invoice
$ascend->invoices()->voidInvoice('UUID');
```

### Contacts

```php
// List contacts
$contacts = $ascend->contacts()->list(['page' => 1]);

// Get a contact
$contact = $ascend->contacts()->get('UUID');

// Create a contact
$contact = $ascend->contacts()->create([
    'first_name' => 'Jane',
    'last_name' => 'Smith',
    'email' => 'jane@example.com',
    'phone' => '+1234567890',
]);

// Update a contact
$contact = $ascend->contacts()->update('UUID', [
    'phone' => '+0987654321',
]);
```

### Installment Plans

```php
// Create an installment plan
$plan = $ascend->installmentPlans()->create([
    'program_id' => 'UUID',
    'installments' => 12,
    'down_payment' => 10000,
]);

// Get an installment plan
$plan = $ascend->installmentPlans()->get('UUID');

// Update an installment plan
$plan = $ascend->installmentPlans()->updateInstallmentPlan('UUID', [
    'status' => 'active',
]);

// Cancel an installment plan
$ascend->installmentPlans()->cancelInstallmentPlan('UUID');

// Archive an installment plan
$ascend->installmentPlans()->archiveInstallmentPlan('UUID');

// Send reminder
$ascend->installmentPlans()->sendInstallmentPlanReminder('UUID');
```

## Error Handling

The SDK throws `AscendException` for API errors:

```php
use AscendSDK\Exceptions\AscendException;

try {
    $program = $ascend->programs()->get('invalid_id');
} catch (AscendException $e) {
    echo "Error: " . $e->getMessage();
    echo "Status Code: " . $e->getStatusCode();
    
    // Get parsed response
    $errorData = $e->getResponseArray();
    print_r($errorData);
}
```

## Configuration

### Environment Variables

```env
ASCEND_API_KEY=your_api_key_here
ASCEND_ENVIRONMENT=sandbox  # or 'production'
ASCEND_TIMEOUT=30
```

### Base URLs

- **Sandbox**: `https://sandbox.api.useascend.com/v1`
- **Production**: `https://api.useascend.com/v1`

## Testing

```bash
composer test
```

## Documentation

For complete API documentation, visit: https://developers.useascend.com/reference

## Support

- **Issues**: [GitHub Issues](https://github.com/your-username/ascend-php-sdk/issues)
- **Email**: support@useascend.com
- **Documentation**: https://developers.useascend.com

## License

MIT License. See [LICENSE](LICENSE) for more information.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.
