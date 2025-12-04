<?php

namespace AscendSDK;

use GuzzleHttp\Client;
use AscendSDK\Resources\AccountsResource;
use AscendSDK\Resources\AttachmentsResource;
use AscendSDK\Resources\BillableCancelationsResource;
use AscendSDK\Resources\BillablesResource;
use AscendSDK\Resources\CancelationRequestsResource;
use AscendSDK\Resources\CancelationReturnsResource;
use AscendSDK\Resources\CarriersResource;
use AscendSDK\Resources\ContactsResource;
use AscendSDK\Resources\CoverageTypesResource;
use AscendSDK\Resources\FinanceEstimateResource;
use AscendSDK\Resources\InstallmentPlansResource;
use AscendSDK\Resources\InstallmentsResource;
use AscendSDK\Resources\InsuredsResource;
use AscendSDK\Resources\InvoicesResource;
use AscendSDK\Resources\LoansResource;
use AscendSDK\Resources\OneTimePaymentsResource;
use AscendSDK\Resources\OrganizationAccountUsersResource;
use AscendSDK\Resources\PaymentProposalsResource;
use AscendSDK\Resources\PayoutsResource;
use AscendSDK\Resources\PremiumReducingEndorsementsResource;
use AscendSDK\Resources\ProgramsResource;
use AscendSDK\Resources\RefundsResource;
use AscendSDK\Resources\ReturnsResource;
use AscendSDK\Resources\UsersResource;
use AscendSDK\Resources\WholesalersResource;

/**
 * Ascend PHP SDK Client
 * 
 * Main client for interacting with the Ascend API.
 */
class AscendClient
{
    private Client $httpClient;
    private string $baseUrl;
    
    // Resource instances
    private AccountsResource $accounts;
    private AttachmentsResource $attachments;
    private BillableCancelationsResource $billableCancelations;
    private BillablesResource $billables;
    private CancelationRequestsResource $cancelationRequests;
    private CancelationReturnsResource $cancelationReturns;
    private CarriersResource $carriers;
    private ContactsResource $contacts;
    private CoverageTypesResource $coverageTypes;
    private FinanceEstimateResource $financeEstimate;
    private InstallmentPlansResource $installmentPlans;
    private InstallmentsResource $installments;
    private InsuredsResource $insureds;
    private InvoicesResource $invoices;
    private LoansResource $loans;
    private OneTimePaymentsResource $oneTimePayments;
    private OrganizationAccountUsersResource $organizationAccountUsers;
    private PaymentProposalsResource $paymentProposals;
    private PayoutsResource $payouts;
    private PremiumReducingEndorsementsResource $premiumReducingEndorsements;
    private ProgramsResource $programs;
    private RefundsResource $refunds;
    private ReturnsResource $returns;
    private UsersResource $users;
    private WholesalersResource $wholesalers;

    /**
     * AscendClient constructor.
     *
     * @param string $apiKey The Ascend API key
     * @param string $environment The environment ('sandbox' or 'production')
     * @param int $timeout Request timeout in seconds
     */
    public function __construct(
        string $apiKey,
        string $environment = 'sandbox',
        int $timeout = 30
    ) {
        // Set base URL based on environment
        $this->baseUrl = $environment === 'production'
            ? 'https://api.useascend.com/v1'
            : 'https://sandbox.api.useascend.com/v1';

        // Configure Guzzle HTTP client
        $this->httpClient = new Client([
            'timeout' => $timeout,
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);

        // Initialize all resource instances
        $this->accounts = new AccountsResource($this->httpClient, $this->baseUrl);
        $this->attachments = new AttachmentsResource($this->httpClient, $this->baseUrl);
        $this->billableCancelations = new BillableCancelationsResource($this->httpClient, $this->baseUrl);
        $this->billables = new BillablesResource($this->httpClient, $this->baseUrl);
        $this->cancelationRequests = new CancelationRequestsResource($this->httpClient, $this->baseUrl);
        $this->cancelationReturns = new CancelationReturnsResource($this->httpClient, $this->baseUrl);
        $this->carriers = new CarriersResource($this->httpClient, $this->baseUrl);
        $this->contacts = new ContactsResource($this->httpClient, $this->baseUrl);
        $this->coverageTypes = new CoverageTypesResource($this->httpClient, $this->baseUrl);
        $this->financeEstimate = new FinanceEstimateResource($this->httpClient, $this->baseUrl);
        $this->installmentPlans = new InstallmentPlansResource($this->httpClient, $this->baseUrl);
        $this->installments = new InstallmentsResource($this->httpClient, $this->baseUrl);
        $this->insureds = new InsuredsResource($this->httpClient, $this->baseUrl);
        $this->invoices = new InvoicesResource($this->httpClient, $this->baseUrl);
        $this->loans = new LoansResource($this->httpClient, $this->baseUrl);
        $this->oneTimePayments = new OneTimePaymentsResource($this->httpClient, $this->baseUrl);
        $this->organizationAccountUsers = new OrganizationAccountUsersResource($this->httpClient, $this->baseUrl);
        $this->paymentProposals = new PaymentProposalsResource($this->httpClient, $this->baseUrl);
        $this->payouts = new PayoutsResource($this->httpClient, $this->baseUrl);
        $this->premiumReducingEndorsements = new PremiumReducingEndorsementsResource($this->httpClient, $this->baseUrl);
        $this->programs = new ProgramsResource($this->httpClient, $this->baseUrl);
        $this->refunds = new RefundsResource($this->httpClient, $this->baseUrl);
        $this->returns = new ReturnsResource($this->httpClient, $this->baseUrl);
        $this->users = new UsersResource($this->httpClient, $this->baseUrl);
        $this->wholesalers = new WholesalersResource($this->httpClient, $this->baseUrl);
    }

    // Resource accessor methods
    public function accounts(): AccountsResource { return $this->accounts; }
    public function attachments(): AttachmentsResource { return $this->attachments; }
    public function billableCancelations(): BillableCancelationsResource { return $this->billableCancelations; }
    public function billables(): BillablesResource { return $this->billables; }
    public function cancelationRequests(): CancelationRequestsResource { return $this->cancelationRequests; }
    public function cancelationReturns(): CancelationReturnsResource { return $this->cancelationReturns; }
    public function carriers(): CarriersResource { return $this->carriers; }
    public function contacts(): ContactsResource { return $this->contacts; }
    public function coverageTypes(): CoverageTypesResource { return $this->coverageTypes; }
    public function financeEstimate(): FinanceEstimateResource { return $this->financeEstimate; }
    public function installmentPlans(): InstallmentPlansResource { return $this->installmentPlans; }
    public function installments(): InstallmentsResource { return $this->installments; }
    public function insureds(): InsuredsResource { return $this->insureds; }
    public function invoices(): InvoicesResource { return $this->invoices; }
    public function loans(): LoansResource { return $this->loans; }
    public function oneTimePayments(): OneTimePaymentsResource { return $this->oneTimePayments; }
    public function organizationAccountUsers(): OrganizationAccountUsersResource { return $this->organizationAccountUsers; }
    public function paymentProposals(): PaymentProposalsResource { return $this->paymentProposals; }
    public function payouts(): PayoutsResource { return $this->payouts; }
    public function premiumReducingEndorsements(): PremiumReducingEndorsementsResource { return $this->premiumReducingEndorsements; }
    public function programs(): ProgramsResource { return $this->programs; }
    public function refunds(): RefundsResource { return $this->refunds; }
    public function returns(): ReturnsResource { return $this->returns; }
    public function users(): UsersResource { return $this->users; }
    public function wholesalers(): WholesalersResource { return $this->wholesalers; }
}
