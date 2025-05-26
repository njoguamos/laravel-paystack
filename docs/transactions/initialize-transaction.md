# Initialize Transaction

Initialize a transaction from your backend to collect payment from your customers. The goal is to get an authorization url that you can redirect your customers to.

## Example Usage

```php
use NjoguAmos\Paystack\Facades\Transaction;
use NjoguAmos\Paystack\Data\Transactions\TransactionInitRequestData;

// Create request data with required parameters
$data = new TransactionInitRequestData(
    amount: 10000,
    email: 'customer@example.com'
);

// Initialize the transaction
$transaction = Transaction::initialize(data: $data);

// Get the authorization URL to redirect the customer to
$authorizationUrl = $response->authorization_url;
```

## Request Parameters

The request parameter must be an instance of `TransactionInitRequestData` where `amount` and `email` are mandatory.

| Parameter          | Type     | Required | Description                                                                                         |
|--------------------|----------|----------|-----------------------------------------------------------------------------------------------------|
| amount             | int      | Yes      | Amount in the smallest currency unit                                                                |
| email              | string   | Yes      | Customer's email address                                                                            |
| currency           | Currency | No       | Transaction currency (defaults to your integration currency)                                        |
| reference          | string   | No       | Unique transaction reference. Only `-`, `.`, `=` and alphanumeric characters allowed                |
| callback_url       | string   | No       | URL to redirect to after payment. Overrides the callback URL set in your dashboard.                 |
| plan               | string   | No       | If transaction is for a subscription, provide the plan code here (invalidates the amount parameter) |
| invoice_limit      | int      | No       | Number of times to charge customer during subscription to plan                                      |
| metadata           | string   | No       | Stringified JSON object of custom data                                                              |
| channels           | array    | No       | Payment channels to make available (e.g., `["card", "bank", "ussd"]`)                               |
| split_code         | string   | No       | The split code for transaction split (e.g., `SPL_98WF13Eb3w`)                                       |
| subaccount         | string   | No       | The code for the subaccount that owns the payment (e.g., `ACCT_8f4s1eq7ml6rlzj`)                    |
| transaction_charge | int      | No       | Amount to override the split configuration for a single split payment                               |
| bearer             | Bearer   | No       | Who bears the transaction charges. Options: `account` or `subaccount` (defaults to `account`)       |


## Advanced Example

```php
use \NjoguAmos\Paystack\Enums\Bearer;
use NjoguAmos\Paystack\Enums\Currency;
use \NjoguAmos\Paystack\Enums\Channel;
use NjoguAmos\Paystack\Endpoints\Transaction
use NjoguAmos\Paystack\Data\Transactions\TransactionInitRequestData;

// Create request data with additional parameters
$data = new TransactionInitRequestData(
    amount: 50000,
    email: 'customer@example.com',
    currency: Currency::USD,
    reference: '01JW57R5A4B9BHFEHKAT7S87MF',
    callback_url: 'https://example.com/callback',
    channels: [Channel::MOBILE_MONEY, Channel::BANK],
    subaccount: 'acc_122',
    bearer: Bearer::SUB_ACCOUNT 
);

$transaction = Transaction::initialize(data: $data);
```

## Response

The response contains the following properties:

| Property          | Type   | Description                                 |
|-------------------|--------|---------------------------------------------|
| authorization_url | string | URL to redirect the customer to for payment |
| access_code       | string | Access code for the transaction             |
| reference         | string | Transaction reference                       |

## Handling the Response

```php
// Redirect the user to the payment page
return redirect($response->authorization_url);

// Or if you're using an API
return response()->json([
    'authorization_url' => $response->authorization_url,
    'access_code' => $response->access_code,
    'reference' => $response->reference,
]);
```

After payment completion, Paystack will redirect to your callback URL or the default URL set in your dashboard. You can then verify the transaction using the reference.