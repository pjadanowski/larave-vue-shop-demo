<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductShowResource;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return Inertia::render('Product/Show', [
            'product' => new ProductShowResource($product),
        ]);
    }
}
