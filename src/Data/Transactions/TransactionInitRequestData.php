<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

use NjoguAmos\Paystack\Enums\Bearer;
use NjoguAmos\Paystack\Data\BaseData;
use NjoguAmos\Paystack\Enums\Currency;

/**
 * Represents the data required to initialize a transaction.
 *
 * This class is used as a data container to encapsulate the necessary information
 * needed when creating and initializing a new transaction.
 *
 * Attributes:
 * - amount: Amount should be in the subunit of the supported currency.
 * - email: Customer's email address.
 * - currency: The transaction currency. Defaults to your integration currency.
 * - reference: Unique transaction reference. Only -, ., = and alphanumeric characters allowed.
 * - callback_url: Fully qualified url, e.g. https://example.com/. Use this to override the callback url provided on the dashboard for this transaction.
 * - plan: If transaction is to create a subscription to a predefined plan, provide plan code here. This would invalidate the value provided in amount.
 * - invoice_limit: Number of times to charge customer during subscription to plan.
 * - metadata: Stringified JSON object of custom data.
 * - channels: An array of payment channels to control what channels you want to make available to the user to make a payment with.
 *   Available channels include: ["card", "bank", "apple_pay", "ussd", "qr", "mobile_money", "bank_transfer", "eft"].
 * - split_code: The split code of the transaction split. e.g. SPL_98WF13Eb3w.
 * - subaccount: The code for the subaccount that owns the payment. e.g. ACCT_8f4s1eq7ml6rlzj.
 * - transaction_charge: An amount used to override the split configuration for a single split payment.
 *   If set, the amount specified goes to the main account regardless of the split configuration.
 * - bearer: Used to indicate who bears the transaction charges. Allowed values are: account or subaccount (defaults to account).
 *
 *
 */
class TransactionInitRequestData extends BaseData
{
    /**
     * @param int $amount
     * @param string $email
     * @param Currency|null $currency
     * @param string|null $reference
     * @param string|null $callback_url
     * @param string|null $plan
     * @param int|null $invoice_limit
     * @param string|null $metadata
     * @param array<int,string>|null $channels
     * @param string|null $split_code
     * @param string|null $subaccount
     * @param int|null $transaction_charge
     * @param Bearer|null $bearer
     */
    public function __construct(
        public int $amount,
        public string $email,
        public ?Currency $currency = null,
        public ?string $reference = null,
        public ?string $callback_url = null,
        public ?string $plan = null,
        public ?int $invoice_limit = null,
        public ?string $metadata = null,
        public ?array  $channels = null,
        public ?string $split_code = null,
        public ?string $subaccount = null,
        public ?int $transaction_charge = null,
        public ?Bearer $bearer = Bearer::ACCOUNT,
    ) {
    }
}
