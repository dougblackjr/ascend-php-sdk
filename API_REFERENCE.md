# API Reference

Complete reference for all Ascend SDK resources and methods.

## Table of Contents

- [Accounts](#accounts)
- [Attachments](#attachments)
- [BillableCancelations](#billablecancelations)
- [Billables](#billables)
- [CancelationRequests](#cancelationrequests)
- [CancelationReturns](#cancelationreturns)
- [Carriers](#carriers)
- [Contacts](#contacts)
- [CoverageTypes](#coveragetypes)
- [FinanceEstimate](#financeestimate)
- [InstallmentPlans](#installmentplans)
- [Installments](#installments)
- [Insureds](#insureds)
- [Invoices](#invoices)
- [Loans](#loans)
- [OneTimePayments](#onetimepayments)
- [OrganizationAccountUsers](#organizationaccountusers)
- [PaymentProposals](#paymentproposals)
- [Payouts](#payouts)
- [PremiumReducingEndorsements](#premiumreducingendorsements)
- [Programs](#programs)
- [Refunds](#refunds)
- [Returns](#returns)
- [Users](#users)
- [Wholesalers](#wholesalers)

---

## Accounts

Access via: `$ascend->accounts()`

### `list()`

**List Accounts**

```php
$ascend->accounts()->list();
```

**HTTP Method:** `GET`

**Endpoint:** `/v1/accounts`

---

### `create()`

**Create Accounts**

```php
$ascend->accounts()->create([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/accounts`

---

### `get()`

**Get account**

```php
$ascend->accounts()->get('id_value');
```

**Parameters:**

- `$id` (string, required): Account identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/accounts/{id}`

---

### `update()`

**Update account**

```php
$ascend->accounts()->update('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): Account identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/accounts/{id}`

---

## Attachments

Access via: `$ascend->attachments()`

### `createAttachment()`

**Create attachment**

```php
$ascend->attachments()->createAttachment([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/attachments`

---

### `get()`

**Get attachment**

```php
$ascend->attachments()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The attachment identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/attachments/{id}`

---

### `delete()`

**Delete Attachments**

```php
$ascend->attachments()->delete('id_value');
```

**Parameters:**

- `$id` (string, required): The attachment identifier

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/attachments/{id}`

---

## BillableCancelations

Access via: `$ascend->billableCancelations()`

### `cancelBillable()`

**Initiate a cancelation for a billable**

```php
$ascend->billableCancelations()->cancelBillable('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The billable identifier
- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/billables/{id}/cancelation`

---

## Billables

Access via: `$ascend->billables()`

### `listBillables()`

**List Billables**

```php
$ascend->billables()->listBillables([
    // query params
]);
```

**Parameters:**

- `$program_id` (array, optional): Filter by associated program

**HTTP Method:** `GET`

**Endpoint:** `/v1/billables`

---

### `createBillable()`

**Create Billable**

```php
$ascend->billables()->createBillable([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/billables`

---

### `get()`

**Get Billable**

```php
$ascend->billables()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The billable identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/billables/{id}`

---

### `updateBillable()`

**Update Billable**

```php
$ascend->billables()->updateBillable('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The billable identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/billables/{id}`

---

### `delete()`

**Delete Billable**

```php
$ascend->billables()->delete('id_value');
```

**Parameters:**

- `$id` (string, required): The billable identifier

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/billables/{id}`

---

### `bulkCreateBillables()`

**Create Billables**

```php
$ascend->billables()->bulkCreateBillables([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/bulk_billables`

---

## CancelationRequests

Access via: `$ascend->cancelationRequests()`

### `get()`

**List Cancelation Requests**

```php
$ascend->cancelationRequests()->get('billable_id_value');
```

**Parameters:**

- `$billable_id` (string, required): The billable identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/billables/{billable_id}/cancelations`

---

### `createCancelationRequest()`

**Create a Cancelation Request**

```php
$ascend->cancelationRequests()->createCancelationRequest('billable_id_value', [
    // data array
]);
```

**Parameters:**

- `$billable_id` (string, required): The billable identifier
- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/billables/{billable_id}/cancelations`

---

### `get()`

**Get a Cancelation Request**

```php
$ascend->cancelationRequests()->get('billable_id_value', 'id_value');
```

**Parameters:**

- `$billable_id` (string, required): The billable identifier
- `$id` (string, required): The cancelation request identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/billables/{billable_id}/cancelations/{id}`

---

### `updateCancelationRequest()`

**Update a Cancelation Request**

```php
$ascend->cancelationRequests()->updateCancelationRequest('billable_id_value', 'id_value', [
    // data array
]);
```

**Parameters:**

- `$billable_id` (string, required): The billable identifier
- `$id` (string, required): The cancelation request identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/billables/{billable_id}/cancelations/{id}`

---

## CancelationReturns

Access via: `$ascend->cancelationReturns()`

### `list()`

**List Cancelation Returns**

```php
$ascend->cancelationReturns()->list([
    // query params
]);
```

**Parameters:**

- `$program_id` (array, optional): The program identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/cancelation_returns`

---

### `createCancelationReturns()`

**Create Cancelation Return**

```php
$ascend->cancelationReturns()->createCancelationReturns([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/cancelation_returns`

---

### `get()`

**Get Cancelation Return**

```php
$ascend->cancelationReturns()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The cancelation return identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/cancelation_returns/{id}`

---

### `updateCancelationReturn()`

**Update Cancelation Returns**

```php
$ascend->cancelationReturns()->updateCancelationReturn('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The cancelation return identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/cancelation_returns/{id}`

---

## Carriers

Access via: `$ascend->carriers()`

### `listCarriers()`

**List Carriers**

```php
$ascend->carriers()->listCarriers([
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$page` (array, optional): The requested page number. Default page number is 0.
- `$search_query` (array, optional): The term used to search. An empty query can be used to fetch all carriers sorted by the carrier name in alphabetical order.

**HTTP Method:** `GET`

**Endpoint:** `/v1/carriers`

---

## Contacts

Access via: `$ascend->contacts()`

### `list()`

**List Contacts**

```php
$ascend->contacts()->list([
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$email` (array, optional): Filter by associated email
- `$contact_type` (array, optional): Filter by contact type
- `$page` (array, optional): Page number

**HTTP Method:** `GET`

**Endpoint:** `/v1/contacts`

---

### `create()`

**Create Contact**

```php
$ascend->contacts()->create([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/contacts`

---

### `get()`

**Get Contact**

```php
$ascend->contacts()->get('id_value');
```

**Parameters:**

- `$id` (string, required)

**HTTP Method:** `GET`

**Endpoint:** `/v1/contacts/{id}`

---

### `update()`

**Update contact**

```php
$ascend->contacts()->update('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required)
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/contacts/{id}`

---

## CoverageTypes

Access via: `$ascend->coverageTypes()`

### `listCoverageTypes()`

**List CoverageTypes**

```php
$ascend->coverageTypes()->listCoverageTypes([
    // query params
]);
```

**Parameters:**

- `$page` (array, optional)

**HTTP Method:** `GET`

**Endpoint:** `/v1/coverage_types`

---

## FinanceEstimate

Access via: `$ascend->financeEstimate()`

### `create()`

**Create FinanceEstimate**

```php
$ascend->financeEstimate()->create([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/finance_estimates`

---

## InstallmentPlans

Access via: `$ascend->installmentPlans()`

### `get()`

**Get installment plan**

```php
$ascend->installmentPlans()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The id of the installment plan

**HTTP Method:** `GET`

**Endpoint:** `/v1/installment_plans/{id}`

---

### `archiveInstallmentPlan()`

**Archive Installment Plan**

```php
$ascend->installmentPlans()->archiveInstallmentPlan('id_value');
```

**Parameters:**

- `$id` (string, required): The id of the installment plan

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/installment_plans/{id}`

---

### `updateInstallmentPlan()`

**Update Installment Plan**

```php
$ascend->installmentPlans()->updateInstallmentPlan('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The id of the installment plan
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/installment_plans/{id}`

---

### `create()`

**Create installment plan**

```php
$ascend->installmentPlans()->create([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/installment_plans`

---

### `cancelInstallmentPlan()`

**Cancel Installment Plan**

```php
$ascend->installmentPlans()->cancelInstallmentPlan('id_value');
```

**Parameters:**

- `$id` (string, required): The id of the installment plan

**HTTP Method:** `POST`

**Endpoint:** `/v1/installment_plans/{id}/cancel`

---

### `sendInstallmentPlanReminder()`

**Notify User**

```php
$ascend->installmentPlans()->sendInstallmentPlanReminder('id_value');
```

**Parameters:**

- `$id` (string, required): The id of the installment plan

**HTTP Method:** `POST`

**Endpoint:** `/v1/installment_plans/{id}/send`

---

## Installments

Access via: `$ascend->installments()`

### `get()`

**Get installment**

```php
$ascend->installments()->get('id_value');
```

**Parameters:**

- `$id` (string, required): Id of the installment

**HTTP Method:** `GET`

**Endpoint:** `/v1/installments/{id}`

---

### `update()`

**Update installment**

```php
$ascend->installments()->update('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): Id of the installment
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/installments/{id}`

---

## Insureds

Access via: `$ascend->insureds()`

### `createInsured()`

**Create Insured**

```php
$ascend->insureds()->createInsured([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/insureds`

---

### `listInsureds()`

**List Insureds**

```php
$ascend->insureds()->listInsureds([
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$page` (array, optional)
- `$email` (array, optional): Filter by associated email
- `$business_name` (array, optional): Search by business name

**HTTP Method:** `GET`

**Endpoint:** `/v1/insureds`

---

### `get()`

**Get Insured**

```php
$ascend->insureds()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The insured identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/insureds/{id}`

---

### `delete()`

**Delete Insured**

```php
$ascend->insureds()->delete('id_value');
```

**Parameters:**

- `$id` (string, required): The insured identifier

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/insureds/{id}`

---

### `updateInsured()`

**Update Insured**

```php
$ascend->insureds()->updateInsured('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The insured identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/insureds/{id}`

---

## Invoices

Access via: `$ascend->invoices()`

### `listInvoices()`

**List Invoices**

```php
$ascend->invoices()->listInvoices([
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$program_id` (array, optional): Filter by associated program
- `$program_id[]` (array, optional): Filter by associated programs. Include in the query multiple times to filter for multiple programs.
- `$page` (array, optional): Page number for paginating results. Default is 1.
- `$billable_id` (array, optional): Filter by associated billable
- `$insured_id` (array, optional): Filter for invoices to be paid by associated insured
- `$product_type` (array, optional)
- `$due_date_start` (array, optional)
- `$due_date_end` (array, optional)
- `$paid_at_start` (array, optional)
- `$paid_at_end` (array, optional)

**HTTP Method:** `GET`

**Endpoint:** `/v1/invoices`

---

### `createInvoice()`

**Create invoice**

```php
$ascend->invoices()->createInvoice([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/invoices`

---

### `get()`

**Get Invoice**

```php
$ascend->invoices()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The invoice identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/invoices/{id}`

---

### `updateInvoice()`

**Update invoice**

```php
$ascend->invoices()->updateInvoice('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The invoice identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/invoices/{id}`

---

### `voidInvoice()`

**Void invoice**

```php
$ascend->invoices()->voidInvoice('id_value');
```

**Parameters:**

- `$id` (string, required): The invoice identifier

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/invoices/{id}`

---

## Loans

Access via: `$ascend->loans()`

### `listLoans()`

**List Loans**

```php
$ascend->loans()->listLoans([
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$page` (array, optional)
- `$status` (array, optional): Filter by associated status
- `$program_id` (array, optional): Filter by associated program

**HTTP Method:** `GET`

**Endpoint:** `/v1/loans`

---

### `get()`

**Get Loan**

```php
$ascend->loans()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The loan identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/loans/{id}`

---

## OneTimePayments

Access via: `$ascend->oneTimePayments()`

### `listOneTimePayments()`

**List One Time Payments**

```php
$ascend->oneTimePayments()->listOneTimePayments([
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$insured_id` (array, optional)
- `$organization_account_id` (array, optional)
- `$due_date_start` (array, optional)
- `$due_date_end` (array, optional)
- `$paid_at_start` (array, optional)
- `$paid_at_end` (array, optional)
- `$page` (array, optional): Page number for paginating results. Default is 1.

**HTTP Method:** `GET`

**Endpoint:** `/v1/one_time_payments`

---

### `createOneTimePayment()`

**Create One Time Payment**

```php
$ascend->oneTimePayments()->createOneTimePayment([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/one_time_payments`

---

### `get()`

**Get One Time Payment**

```php
$ascend->oneTimePayments()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The one time payment identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/one_time_payments/{id}`

---

### `updateOneTimePayment()`

**Update One Time Payment**

```php
$ascend->oneTimePayments()->updateOneTimePayment('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The one time payment identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/one_time_payments/{id}`

---

### `voidOneTimePayment()`

**Void One Time Payment**

```php
$ascend->oneTimePayments()->voidOneTimePayment('id_value');
```

**Parameters:**

- `$id` (string, required): The one time payment identifier

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/one_time_payments/{id}`

---

### `sendOneTimePaymentReminder()`

**Notify User**

```php
$ascend->oneTimePayments()->sendOneTimePaymentReminder('id_value');
```

**Parameters:**

- `$id` (string, required): The id of the one_time_payment

**HTTP Method:** `POST`

**Endpoint:** `/v1/one_time_payments/{id}/send`

---

## OrganizationAccountUsers

Access via: `$ascend->organizationAccountUsers()`

### `listOrgAccountUsers()`

**List account users**

```php
$ascend->organizationAccountUsers()->listOrgAccountUsers('account_id_value', [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$account_id` (string, required)
- `$page` (array, optional)
- `$email` (array, optional)

**HTTP Method:** `GET`

**Endpoint:** `/v1/organization_accounts/{account_id}/users`

---

### `createOrgAccountUser()`

**Create account user**

```php
$ascend->organizationAccountUsers()->createOrgAccountUser('account_id_value', [
    // data array
]);
```

**Parameters:**

- `$account_id` (string, required)
- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/organization_accounts/{account_id}/users`

---

### `get()`

**Get account user**

```php
$ascend->organizationAccountUsers()->get('account_id_value', 'id_value');
```

**Parameters:**

- `$account_id` (string, required)
- `$id` (string, required)

**HTTP Method:** `GET`

**Endpoint:** `/v1/organization_accounts/{account_id}/users/{id}`

---

## PaymentProposals

Access via: `$ascend->paymentProposals()`

### `createPaymentProposal()`

**Generate payment proposal document for a program**

```php
$ascend->paymentProposals()->createPaymentProposal([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/payment_proposals`

---

## Payouts

Access via: `$ascend->payouts()`

### `listPayouts()`

**List Payouts**

```php
$ascend->payouts()->listPayouts([
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$program_id` (array, optional): Filter by associated program
- `$page` (array, optional)
- `$status` (array, optional): Filter by status
- `$paid_at` (array, optional): Filter by paid_at date range. The date should be defined as a ISO-8601 date.
- `$created_at` (array, optional): Filter by created_at date range. The date should be defined as a ISO-8601 date.

**HTTP Method:** `GET`

**Endpoint:** `/v1/payouts`

---

## PremiumReducingEndorsements

Access via: `$ascend->premiumReducingEndorsements()`

### `create()`

**Create premium reducing endorsement**

```php
$ascend->premiumReducingEndorsements()->create([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/premium_reducing_endorsements`

---

### `get()`

**Show a premium reducing endorsement**

```php
$ascend->premiumReducingEndorsements()->get('id_value');
```

**Parameters:**

- `$id` (string, required): Endorsement ID

**HTTP Method:** `GET`

**Endpoint:** `/v1/premium_reducing_endorsements/{id}`

---

### `update()`

**Update a premium reducing endorsement**

```php
$ascend->premiumReducingEndorsements()->update('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): Endorsement ID
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/premium_reducing_endorsements/{id}`

---

### `delete()`

**delete premium reducing endorsement**

```php
$ascend->premiumReducingEndorsements()->delete('id_value');
```

**Parameters:**

- `$id` (string, required): Endorsement ID

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/premium_reducing_endorsements/{id}`

---

## Programs

Access via: `$ascend->programs()`

### `listPrograms()`

**List Programs**

```php
$ascend->programs()->listPrograms([
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$page` (array, optional)
- `$insured_id` (array, optional): Filter by associated insured
- `$purchased_at` (array, optional): Filters by purchased date. The date should be defined as a ISO-8601 date.

**HTTP Method:** `GET`

**Endpoint:** `/v1/programs`

---

### `createProgram()`

**Create Program**

```php
$ascend->programs()->createProgram([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/programs`

---

### `get()`

**Get Program**

```php
$ascend->programs()->get('id_value', [
    // query params
]);
```

**Parameters:**

- `$id` (string, required): The program identifier
- `$include_archived` (array, optional): Include archived programs

**HTTP Method:** `GET`

**Endpoint:** `/v1/programs/{id}`

---

### `updateProgram()`

**Update program**

```php
$ascend->programs()->updateProgram('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The program identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/programs/{id}`

---

### `delete()`

**Archive Program**

```php
$ascend->programs()->delete('id_value');
```

**Parameters:**

- `$id` (string, required): The program identifier

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/programs/{id}`

---

### `notifyInsured()`

**Notify User**

```php
$ascend->programs()->notifyInsured('id_value');
```

**Parameters:**

- `$id` (string, required): the id of the program

**HTTP Method:** `POST`

**Endpoint:** `/v1/programs/{id}/send`

---

### `unarchiveProgram()`

**Unarchive program**

```php
$ascend->programs()->unarchiveProgram('id_value');
```

**Parameters:**

- `$id` (string, required): The id of the program

**HTTP Method:** `POST`

**Endpoint:** `/v1/programs/{id}/unarchive`

---

### `createLoanPayoffEstimate()`

**Loan Payoff Estimate**

```php
$ascend->programs()->createLoanPayoffEstimate('id_value');
```

**Parameters:**

- `$id` (string, required): the id of the program

**HTTP Method:** `POST`

**Endpoint:** `/v1/programs/{id}/loan_payoff_estimate`

---

## Refunds

Access via: `$ascend->refunds()`

### `list()`

**List Refunds**

```php
$ascend->refunds()->list([
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$billable_id` (array, optional): Filter by associated billable
- `$program_id` (array, optional): Filter by associated program
- `$invoice_id` (array, optional): Filter by associated invoice
- `$paid_at` (array, optional): Filter by paid_at date range. The date should be defined as a ISO-8601 date.
- `$created_at` (array, optional): Filter by created_at date range. The date should be defined as a ISO-8601 date.

**HTTP Method:** `GET`

**Endpoint:** `/v1/refunds`

---

## Returns

Access via: `$ascend->returns()`

### `get()`

**Get returns**

```php
$ascend->returns()->get('installment_plan_id_value');
```

**Parameters:**

- `$installment_plan_id` (string, required)

**HTTP Method:** `GET`

**Endpoint:** `/v1/installment_plans/{installment_plan_id}/returns`

---

### `create()`

**Create a return**

```php
$ascend->returns()->create('installment_plan_id_value', [
    // data array
]);
```

**Parameters:**

- `$installment_plan_id` (string, required)
- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/installment_plans/{installment_plan_id}/returns`

---

### `get()`

**Get a return**

```php
$ascend->returns()->get('installment_plan_id_value', 'return_id_value');
```

**Parameters:**

- `$installment_plan_id` (string, required)
- `$return_id` (string, required)

**HTTP Method:** `GET`

**Endpoint:** `/v1/installment_plans/{installment_plan_id}/returns/{return_id}`

---

### `update()`

**Update a return**

```php
$ascend->returns()->update('installment_plan_id_value', 'return_id_value', [
    // data array
]);
```

**Parameters:**

- `$installment_plan_id` (string, required)
- `$return_id` (string, required)
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/installment_plans/{installment_plan_id}/returns/{return_id}`

---

### `delete()`

**Void return**

```php
$ascend->returns()->delete('installment_plan_id_value', 'return_id_value');
```

**Parameters:**

- `$installment_plan_id` (string, required)
- `$return_id` (string, required)

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/installment_plans/{installment_plan_id}/returns/{return_id}`

---

### `get()`

**Get returns**

```php
$ascend->returns()->get('one_time_payment_id_value');
```

**Parameters:**

- `$one_time_payment_id` (string, required)

**HTTP Method:** `GET`

**Endpoint:** `/v1/one_time_payments/{one_time_payment_id}/returns`

---

### `create()`

**Create a return**

```php
$ascend->returns()->create('one_time_payment_id_value', [
    // data array
]);
```

**Parameters:**

- `$one_time_payment_id` (string, required)
- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/one_time_payments/{one_time_payment_id}/returns`

---

### `get()`

**Get a return**

```php
$ascend->returns()->get('one_time_payment_id_value', 'return_id_value');
```

**Parameters:**

- `$one_time_payment_id` (string, required)
- `$return_id` (string, required)

**HTTP Method:** `GET`

**Endpoint:** `/v1/one_time_payments/{one_time_payment_id}/returns/{return_id}`

---

### `update()`

**Update a return**

```php
$ascend->returns()->update('one_time_payment_id_value', 'return_id_value', [
    // data array
]);
```

**Parameters:**

- `$one_time_payment_id` (string, required)
- `$return_id` (string, required)
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/one_time_payments/{one_time_payment_id}/returns/{return_id}`

---

### `delete()`

**Void return**

```php
$ascend->returns()->delete('one_time_payment_id_value', 'return_id_value');
```

**Parameters:**

- `$one_time_payment_id` (string, required)
- `$return_id` (string, required)

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/one_time_payments/{one_time_payment_id}/returns/{return_id}`

---

### `list()`

**List Cancelation Returns**

```php
$ascend->returns()->list([
    // query params
]);
```

**Parameters:**

- `$cancelation_id` (array, optional): The cancelation request identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/returns`

---

### `createReturn()`

**Create Return**

```php
$ascend->returns()->createReturn([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/returns`

---

### `get()`

**Get a Return**

```php
$ascend->returns()->get('id_value');
```

**Parameters:**

- `$id` (string, required): The cancelation return identifier

**HTTP Method:** `GET`

**Endpoint:** `/v1/returns/{id}`

---

### `updateReturn()`

**Update Cancelation Returns**

```php
$ascend->returns()->updateReturn('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required): The cancelation return identifier
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/returns/{id}`

---

### `delete()`

**Delete a Cancelation Return**

```php
$ascend->returns()->delete('id_value');
```

**Parameters:**

- `$id` (string, required): The cancelation return identifier

**HTTP Method:** `DELETE`

**Endpoint:** `/v1/returns/{id}`

---

## Users

Access via: `$ascend->users()`

### `listUsers()`

**List Users**

```php
$ascend->users()->listUsers([
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$page` (array, optional)
- `$email` (array, optional)

**HTTP Method:** `GET`

**Endpoint:** `/v1/users`

---

### `createUser()`

**Create User**

```php
$ascend->users()->createUser([
    // data array
]);
```

**Parameters:**

- `$data` (array, required): Request body data

**HTTP Method:** `POST`

**Endpoint:** `/v1/users`

---

### `get()`

**Get User**

```php
$ascend->users()->get('id_value');
```

**Parameters:**

- `$id` (string, required)

**HTTP Method:** `GET`

**Endpoint:** `/v1/users/{id}`

---

### `updateUser()`

**Update User**

```php
$ascend->users()->updateUser('id_value', [
    // data array
]);
```

**Parameters:**

- `$id` (string, required)
- `$data` (array, required): Request body data

**HTTP Method:** `PATCH`

**Endpoint:** `/v1/users/{id}`

---

## Wholesalers

Access via: `$ascend->wholesalers()`

### `listWholesalers()`

**List Wholesalers**

```php
$ascend->wholesalers()->listWholesalers([
    // query params
], [
    // query params
]);
```

**Parameters:**

- `$page` (array, optional): The requested page number. Default page number is 0.
- `$search_query` (array, optional): The term used to search. An empty query can be used to fetch all wholesalers sorted by the wholesaler name in alphabetical order.

**HTTP Method:** `GET`

**Endpoint:** `/v1/wholesalers`

---

