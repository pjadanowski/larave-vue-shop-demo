<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCardResource;
use App\Models\Product;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index(): \Inertia\Response
    {
        $products = Product::with('category')->inRandomOrder()->limit(4)->get();

        return Inertia::render('Index', [
            'products' => ProductCardResource::collection($products),
        ]);
    }
}
