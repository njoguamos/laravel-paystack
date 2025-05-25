<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NjoguAmos\Paystack\Paystack
 */
class Paystack extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'paystack';
    }
}
