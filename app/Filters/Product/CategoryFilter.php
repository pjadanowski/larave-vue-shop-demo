<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends FilterAbstract
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        return $builder->whereHas('category', fn(Builder $q) => $q->whereIn('slug', $value));
    }
}
