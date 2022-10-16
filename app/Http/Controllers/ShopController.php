<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCardResource;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with(['category'])->paginate(10);

        return Inertia::render('Shop', [
            'products' => ProductCardResource::collection($products),
            'filters' => [],
            'categories' => Cache::rememberForever('categories', fn () => Category::get(['id', 'name', 'slug'])),
        ]);
    }
}
