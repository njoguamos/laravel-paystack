<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NjoguAmos\Paystack\Endpoints\Transaction
 */
class Transaction extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \NjoguAmos\Paystack\Endpoints\Transaction::class;
    }
}
