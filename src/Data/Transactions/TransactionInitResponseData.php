<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

use NjoguAmos\Paystack\Data\BaseData;

class TransactionInitResponseData extends BaseData
{
    public function __construct(
        public string $authorization_url,
        public string $access_code,
        public string $reference,
    ) {
    }
}
