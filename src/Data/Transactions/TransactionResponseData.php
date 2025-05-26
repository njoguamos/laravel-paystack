<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

use NjoguAmos\Paystack\Data\BaseData;

class TransactionResponseData extends BaseData
{
    public function __construct(
        public int $id,
        public string $domain,
        // TODO: Add more attributes
    ) {
    }
}
