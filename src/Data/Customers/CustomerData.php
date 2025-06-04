<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data\Customers;

class CustomerData
{
    public function __construct(
        public int $id,
        public ?string $first_name,
        public ?string $last_name,
        public string $email,
        public string $customer_code,
        public ?string $phone,
        public mixed $metadata,
        public string $risk_action,
        public ?string $international_format_phone
    ) {
    }
}
