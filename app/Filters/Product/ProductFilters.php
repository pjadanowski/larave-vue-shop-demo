<?php

namespace App\Filters\Product;

use App\Filters\FiltersAbstract;

class ProductFilters extends FiltersAbstract
{
    /**
     * all filters that matters
     * <string, object>
     * string: queryString for the filter
     * object: filterClass itself
     */
    protected array $filters = [
        'categories'       => CategoryFilter::class,
        'priceMax'         => PriceMaxFilter::class,
        'priceMin'         => PriceMinFilter::class,
    ];

    public function clearFilters(array $params): array
    {
        $allowedKeys = array_keys($this->getFilters());

        return array_filter($params, fn ($value, $queryKey) => ! empty($value) && in_array($queryKey, $allowedKeys), ARRAY_FILTER_USE_BOTH);
    }

}
