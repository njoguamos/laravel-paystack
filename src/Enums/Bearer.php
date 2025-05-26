<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Enums;

enum Bearer: string
{
    case ACCOUNT = 'account';

    case SUB_ACCOUNT = 'subaccount';
}
