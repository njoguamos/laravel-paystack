<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

use NjoguAmos\Paystack\Data\BaseData;

class LogData extends BaseData
{
    public function __construct(
        public int $start_time,
        public int $time_spent,
        public int $attempts,
        public int $errors,
        public bool $success,
        public bool $mobile,
        /** @var array<string, mixed> */
        public array $input,
        /** @var array<int, mixed> */
        public array $history
    ) {
    }
}
