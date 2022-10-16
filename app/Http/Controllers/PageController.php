<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::limit(4)->get();

        return Inertia::render('Index', compact('products'));
    }
}
