<?php

if (!function_exists('money')) {

    /**
     * money
     *
     * @param float|\browner12\money\Money $money
     * @param string                       $currency
     * @return string
     */
    function money($money, $currency = 'usd')
    {
        //money object
        if ($money instanceof \browner12\money\Money) {
            $currency = $money->getCurrency()->currency();
            $money = $money->value();
        }

        //formatter
        $cf = new NumberFormatter('eng', NumberFormatter::CURRENCY);

        //return
        return $cf->formatCurrency($money, $currency);
    }
}
