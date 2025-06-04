<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

use NjoguAmos\Paystack\Data\BaseData;
use NjoguAmos\Paystack\Data\Customers\CustomerData;

class TransactionResponseData extends BaseData
{
    public function __construct(
        public int $id,
        public string $domain,
        public string $status,
        public string $reference,
        public ?string $receipt_number,
        public int $amount,
        public ?string $message,
        public string $gateway_response,
        public string $paid_at,
        public string $created_at,
        public string $channel,
        public string $currency,
        public string $ip_address,
        public string $metadata,
        public LogData $log,
        public int $fees,
        public mixed $fees_split,
        public AuthorizationData $authorization,
        public CustomerData $customer,
        public mixed $plan,
        /** @var array<int, mixed> */
        public array $split,
        public ?string $order_id,
        public string $paidAt,
        public string $createdAt,
        public int $requested_amount,
        public mixed $pos_transaction_data,
        public mixed $source,
        public mixed $fees_breakdown,
        public mixed $connect,
        public string $transaction_date,
        /** @var array<int,mixed> */
        public array $plan_object,
        /** @var array<int,mixed> */
        public array $subaccount
    ) {
    }
}
