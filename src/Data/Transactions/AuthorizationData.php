<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Transactions;

class AuthorizationData
{
    public function __construct(
        public string $authorization_code,
        public string $bin,
        public string $last4,
        public string $exp_month,
        public string $exp_year,
        public string $channel,
        public string $card_type,
        public string $bank,
        public string $country_code,
        public string $brand,
        public bool $reusable,
        public ?string $signature,
        public ?string $account_name
    ) {
    }
}
