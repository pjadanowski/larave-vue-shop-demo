<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class PriceMaxFilter extends FilterAbstract
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        if (!is_numeric($value)) {
            return $builder;
        }

        return $builder->where('price', '<=', $value * 100);
    }
}
