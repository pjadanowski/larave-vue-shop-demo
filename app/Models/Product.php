<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Casts\MoneyCast;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function show(): string
    {
        return route('product.show', $this);
    }
}
