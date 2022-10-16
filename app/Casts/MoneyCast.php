<?php

namespace App\Casts;

use App\Services\MoneyService;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class MoneyCast implements CastsAttributes
{

    protected MoneyService $moneyService;

    public function __construct()
    {
        $this->moneyService = new MoneyService();
    }


    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes): string
    {
        return $this->moneyService->format($value);
    }


    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  int     $value
     * @param  array  $attributes
     * @return int
     */
    public function set($model, $key, $value, $attributes): int
    {
        return $value;
    }
}
