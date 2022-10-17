<?php

namespace App\Services;

use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;
use NumberFormatter;

class MoneyService
{
    public function priceToMoney(int $value): Money
    {
        return new Money($value, new Currency('USD'));
    }

    public function getFormatter(): IntlMoneyFormatter
    {
        return new IntlMoneyFormatter(
            new NumberFormatter('en_US', NumberFormatter::CURRENCY),
            new ISOCurrencies
        );
    }

    public function format(int $value): string
    {
        return $this->getFormatter()->format($this->priceToMoney($value));
    }
}
