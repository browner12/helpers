<?php

if (!function_exists('money')) {

    /**
     * money
     *
     * @param float|\Money\Money $money
     * @param string             $currency
     * @return string
     */
    function money($money, $currency = 'usd')
    {
        //formatter
        $numberFormatter = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);

        //money object
        if ($money instanceof \Money\Money) {

            $currencies = new \Money\Currencies\ISOCurrencies();

            $moneyFormatter = new \Money\Formatter\IntlMoneyFormatter($numberFormatter, $currencies);

            return $moneyFormatter->format($money);
        }

        //return
        return $numberFormatter->formatCurrency($money, $currency);
    }
}
