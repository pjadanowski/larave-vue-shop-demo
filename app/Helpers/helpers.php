<?php

use App\Cart\Cart;
use App\Services\MoneyService;


if (!function_exists('cart')) {
    function cart(): Cart
    {
        return app(Cart::class);
    }
}

if (!function_exists('formatMoney')) {
    function formatMoney($value): string
    {
        return (new MoneyService())->format($value);
    }
}
