<?php

namespace App\Cart;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Cart
{
    /**
     * Shopping cart content.
     * content will be stored in following form
     * [
     *   "productId"  => quantity,
     *   "productId2" => quantity,
     *   ...
     * ]
     */
    private Collection $content;

    /**
     * added coupons
     */
    private Collection $coupons;

    public function __construct()
    {
        $this->content = new Collection;
        $this->coupons = new Collection;
    }

    public function key(): string
    {
        return 'cart_'.(Auth::id() ?? str_replace('.', '', Request::ip()));
    }

    public function content(): Collection
    {
        return $this->content = session($this->key(), collect());
    }

    public function add(int $productId, int $quantity = 1): void
    {
        $currentQuantity = 0;

        if ($this->content()->keys()->contains($productId)) {
            $currentQuantity = $this->content->get($productId);
        }

        $this->setQuantity($currentQuantity + $quantity, $productId);

        $this->storeContentInSession();
    }

    public function setQuantity(int $quantity, int $productId): void
    {
        $this->content()->put($productId, $quantity);

        $this->storeContentInSession();
    }

    public function remove($productId): void
    {
        $this->content()->forget($productId);
        $this->storeContentInSession();
    }

    public function count(): int
    {
        return $this->content()->sum();
    }

    public function products(): Collection
    {
        return Product::find($this->content()->keys())
            ->map(fn (Product $product) => (new CartItem($product, $this->content()->get($product->id)))->toArray());
    }

    public function total(): int
    {
        return $this->products()->sum(fn (array $item) => $item['total']);
    }

    public function coupons(): Collection
    {
        return $this->getCoupons();
    }

    protected function getCoupons(): Collection
    {
        return $this->coupons = session('coupons', collect());
    }

    public function storeContentInSession(): void
    {
        session()->put($this->key(), $this->content);
    }
}
