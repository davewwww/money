<?php

declare(strict_types=1);

namespace Brick\Money;

final class CustomCurrencyProvider
{
    /** @var Currency[] */
    private static $currencies = [];

    public static function getCurrency(string $currencyCode): ?Currency
    {
        return self::$currencies[$currencyCode] ?? null;
    }

    public static function addCurrency(Currency $currency): void
    {
        $currencyCode = $currency->getCurrencyCode();

        if (!isset(self::$currencies[$currencyCode])) {
            self::$currencies[$currencyCode] = $currency;
        }
    }

}
