<?php

namespace App\Cart;

use App\Models\Product;

class CartItem
{

    public function __construct(
        private int $id,
        private string $name,
        private int $price,
        private int $quantity,
        private ?string $image = null,
    ) {
        //
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getPrice(): int
    {
        return $this->price;
    }


    public function getQuantity(): int
    {
        return $this->quantity;
    }


    public function getImage(): string
    {
        return $this->image;
    }

    public function getTotal(): int
    {
        return $this->price * $this->quantity;
    }

    public function getProduct(): Product
    {
        return Product::find($this->id);
    }

    public function getFormattedPrice(): string
    {
        return formatMoney($this->price);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'formatted_price' => $this->getFormattedPrice(),
            'quantity' => $this->quantity,
            'image' => $this->image,
        ];
    }
}
