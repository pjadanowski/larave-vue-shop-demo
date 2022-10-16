<?php


namespace Tests\Factories;


trait CartFactory
{
    use ProductFactory;

    protected function addItemToCart($item = null, $quantity = 1)
    {
        $product = $item ?? $this->generateProduct();

        return cart()->add($product->id, $quantity);
    }

    protected function addDefaultItemToCart($quantity = 1): void
    {
        $product = $this->generateProduct();

        cart()->add($product->id, $quantity);
    }

    protected function addItemsToCart($amount = 5): void
    {
        foreach (range(1, $amount) as $i) {
            $this->addDefaultItemToCart();
        }
    }


    // ! coupons are not avaliable in demo version


    // protected function addCoupon(Coupon $coupon = null)
    // {
    //     $coupon = is_null($coupon) ? $this->generateCoupon() : $coupon;
    //     return CartFacade::addCoupon($coupon);
    // }

    // protected function generateCoupon($code = 'ABC', $type = 'fixed', $value = 3000)
    // {
    //     return factory(Coupon::class)->make([
    //         'code' => $code,
    //         'type' => $type,
    //         'value' => $type == 'fixed' ? $value : 0,
    //         'percent_off' => $type == 'percent' ? $value : 0,
    //     ]);
    // }
}
