<?php

namespace AscendSDK\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Ascend SDK Facade for Laravel
 *
 * @method static \AscendSDK\Resources\AccountsResource accounts()
 * @method static \AscendSDK\Resources\AttachmentsResource attachments()
 * @method static \AscendSDK\Resources\BillableCancelationsResource billableCancelations()
 * @method static \AscendSDK\Resources\BillablesResource billables()
 * @method static \AscendSDK\Resources\CancelationRequestsResource cancelationRequests()
 * @method static \AscendSDK\Resources\CancelationReturnsResource cancelationReturns()
 * @method static \AscendSDK\Resources\CarriersResource carriers()
 * @method static \AscendSDK\Resources\ContactsResource contacts()
 * @method static \AscendSDK\Resources\CoverageTypesResource coverageTypes()
 * @method static \AscendSDK\Resources\FinanceEstimateResource financeEstimate()
 * @method static \AscendSDK\Resources\InstallmentPlansResource installmentPlans()
 * @method static \AscendSDK\Resources\InstallmentsResource installments()
 * @method static \AscendSDK\Resources\InsuredsResource insureds()
 * @method static \AscendSDK\Resources\InvoicesResource invoices()
 * @method static \AscendSDK\Resources\LoansResource loans()
 * @method static \AscendSDK\Resources\OneTimePaymentsResource oneTimePayments()
 * @method static \AscendSDK\Resources\OrganizationAccountUsersResource organizationAccountUsers()
 * @method static \AscendSDK\Resources\PaymentProposalsResource paymentProposals()
 * @method static \AscendSDK\Resources\PayoutsResource payouts()
 * @method static \AscendSDK\Resources\PremiumReducingEndorsementsResource premiumReducingEndorsements()
 * @method static \AscendSDK\Resources\ProgramsResource programs()
 * @method static \AscendSDK\Resources\RefundsResource refunds()
 * @method static \AscendSDK\Resources\ReturnsResource returns()
 * @method static \AscendSDK\Resources\UsersResource users()
 * @method static \AscendSDK\Resources\WholesalersResource wholesalers()
 *
 * @see \AscendSDK\AscendClient
 */
class Ascend extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'ascend';
    }
}
