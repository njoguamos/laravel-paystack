<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

use NjoguAmos\Paystack\Enums\Bearer;
use NjoguAmos\Paystack\Data\BaseData;
use NjoguAmos\Paystack\Enums\Currency;

/**
 * Represents the data required to initialize a transaction.
 */
class InitializeRequestData extends BaseData
{
    public function __construct(
        public int $amount,
        public string $email,
        public int|string $reference,
        public ?Currency $currency = null,
        public ?string $callback_url = null,
        public ?string $plan = null,
        public ?int $invoice_limit = null,
        public ?string $metadata = null,
        /** @var array<int,string>|null */
        public ?array  $channels = null,
        public ?string $split_code = null,
        public ?string $subaccount = null,
        public ?int $transaction_charge = null,
        public ?Bearer $bearer = Bearer::ACCOUNT,
    ) {
    }
}
