<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Cart', [
            'cartProducts' => cart()->products(),
            'total'        => formatMoney(cart()->total())
        ]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'productId' => ['required', 'numeric', 'exists:products,id'],
            'quantity'  => ['required', 'numeric', 'min:1'], // max: product->stock_quantity
        ]);

        cart()->add(...$validated);

        session()->flash('success', 'Product added to cart');
        return back();
    }
}
