<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FiltersAbstract
{
    protected array $filters = [];

    public function __construct(
        protected Request $request
    ) {
        //
    }

    public function filter(Builder $builder): Builder
    {
        foreach ($this->allowedFilters() as $queryKey => $value) {
            $obj = (new $this->filters[$queryKey]);
            $obj->filter($builder, $value);
        }

        return $builder;
    }

    public function getFilters(): array
    {
        return $this->filters;
    }

    public function allowedFilters(): array
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }
}
