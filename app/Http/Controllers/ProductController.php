<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductShowResource;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return Inertia::render('Product/Show', [
            'product' => new ProductShowResource($product)
        ]);
    }
}
