<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack;

class Paystack
{
    /**
     * Create a new Paystack instance.
     *
     * @return void
     */
    public function __construct(protected string $secretKey)
    {
    }

    /**
     * Get the Paystack secret key.
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }
}
