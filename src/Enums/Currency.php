<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Enums;

/**
 * Supported Currency Enum
 *
 * Paystack makes use of the ISO 4217 format for currency codes. When sending
 * an amount, it must be sent in the subunit of that currency. i.e. Sending
 * an amount in subunits simply means multiplying the base amount by 100.
 *
 * @see https://www.iso.org/iso-4217-currency-codes.html
 *
 */
enum Currency: string
{
    case NGN = 'NGN';
    case USD = 'USD';
    case GHS = 'GHS';
    case ZAR = 'ZAR';
    case KES = 'KES';

    /**
     * Get the base unit of the currency
     */
    public function baseUnit(): string
    {
        return match($this) {
            self::NGN => 'Kobo',
            self::USD => 'Cent',
            self::GHS => 'Pesewa',
            self::ZAR => 'Cent',
            self::KES => 'Cent',
        };
    }

    /**
     * Get the description of the currency
     */
    public function description(): string
    {
        return match($this) {
            self::NGN => 'Nigerian Naira',
            self::USD => 'US Dollar',
            self::GHS => 'Ghanaian Cedi',
            self::ZAR => 'South African Rand',
            self::KES => 'Kenyan Shilling',
        };
    }

    /**
     * Get the minimum transaction amount
     */
    public function minimumTransaction(): string
    {
        return match($this) {
            self::NGN => '₦ 50.00',
            self::USD => '$ 2.00',
            self::GHS => '₵ 0.10',
            self::ZAR => 'R 1.00',
            self::KES => 'Ksh. 1.00',
        };
    }

    /**
     * Get the currency symbol
     */
    public function symbol(): string
    {
        return match($this) {
            self::NGN => '₦',
            self::USD => '$',
            self::GHS => '₵',
            self::ZAR => 'R',
            self::KES => 'Ksh.',
        };
    }
}
