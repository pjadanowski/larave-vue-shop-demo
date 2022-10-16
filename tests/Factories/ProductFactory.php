<?php

namespace Tests\Factories;

use App\Models\Product;
use Illuminate\Support\Str;

trait ProductFactory
{

    public function generateProduct($id = 10, $name = 'Test Product', $price = 1999): Product
    {
        return Product::factory()->make([
            'id' => $id,
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $price,
        ]);
    }

    public function createProduct($id = 10, $name = 'Test Product', $price = 1999): Product
    {
        return Product::create([
            'id' => $id,
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $price,
        ]);
    }
}
