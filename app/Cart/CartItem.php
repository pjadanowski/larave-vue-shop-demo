<?php

namespace App\Cart;

use App\Models\Product;

class CartItem
{
    public function __construct(
        protected Product $product,
        protected int $quantity,
    ) {
        //
    }

    public function getId(): int
    {
        return $this->product->id;
    }


    public function getName(): string
    {
        return $this->product->name;
    }


    public function getPrice(): int
    {
        return $this->product->getRawOriginal('price');
    }


    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getImage(): string
    {
        return $this->product->image;
    }

    public function getTotal(): int
    {
        return $this->getPrice() * $this->quantity;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getFormattedPrice(): string
    {
        return formatMoney($this->getPrice());
    }

    public function getUrl(): string
    {
        return $this->product->show();
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'formatted_price' => $this->getFormattedPrice(),
            'total' => $this->getTotal(),
            'total_formatted' => formatMoney( $this->getTotal()),
            'quantity' => $this->quantity,
            'image' => $this->getImage(),
            'url' => $this->getUrl()
        ];
    }

}
