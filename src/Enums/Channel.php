<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Enums;

enum Channel: string
{
    case CARD = 'card';
    case BANK = 'bank';
    case APPLE_PAY = 'apple_pay';
    case USSD = 'ussd';
    case QR = 'qr';
    case MOBILE_MONEY = 'mobile_money';
    case BANK_TRANSFER = 'bank_transfer';
    case EFT = 'eft';
}
