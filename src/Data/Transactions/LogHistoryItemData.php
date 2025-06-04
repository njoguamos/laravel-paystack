<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

use NjoguAmos\Paystack\Data\BaseData;

class LogHistoryItemData extends BaseData
{
    public function __construct(
        public string $type,
        public string $message,
        public int $time
    ) {
    }
}
