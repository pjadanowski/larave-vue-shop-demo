<?php

namespace App\Http\Controllers;

use App\Filters\Product\ProductFilters;
use App\Http\Resources\ProductCardResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;

class ShopController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        $products = $this->getProducts($request);

        return Inertia::render('Shop', [
            'products'   => ProductCardResource::collection($products),
            'filters'    => (new ProductFilters($request))->allowedFilters(),
            'categories' => Cache::rememberForever('categories', fn () => Category::get(['id', 'name', 'slug'])),
        ]);
    }

    private function getProducts(Request $request)
    {
        return Product::with(['category'])->filter($request)->paginate(20)->withQueryString();
    }
}
