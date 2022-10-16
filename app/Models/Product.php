<?php

namespace App\Models;

use App\Filters\Product\ProductFilters;
use App\Traits\HasSlug;
use App\Casts\MoneyCast;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method Builder filter(Builder $builder, Request $request)
 */
class Product extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name', 'slug', 'price', 'description', 'image',
    ];

    protected $casts = [
        'price' => MoneyCast::class,
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $builder, Request $request): Builder
    {
        return (new ProductFilters($request))->filter($builder);
    }

    public function show(): string
    {
        return route('product.show', $this);
    }
}
