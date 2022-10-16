<?php

namespace Tests\Unit\Cart;

use Tests\Factories\CartFactory;
use Tests\TestCase;
use App\Models\Product;

class CartTest extends TestCase
{
    use CartFactory;


    public function test_add_item_to_cart()
    {
        $this->addDefaultItemToCart();

        $this->assertEquals(1, cart()->count());

        $this->addDefaultItemToCart();

        $this->assertEquals(2, cart()->count());
    }

    public function test_adds_two_same_items_to_cart_not_duplicating_entry()
    {
        $prod1 = $this->generateProduct();

        $this->addItemToCart($prod1);
        $this->addItemToCart($prod1);

        $this->assertCount(1, cart()->content());
    }

    public function test_adds_two_different_items_to_cart()
    {
        $prod1 = $this->generateProduct();
        $prod2 = $this->generateProduct(11, 'Product2', 1111);

        $this->addItemToCart($prod1);
        $this->addItemToCart($prod2);

        $this->assertCount(2, cart()->content());
    }

    public function test_remove_item_from_cart_by_id()
    {
        $this->addItemsToCart(5);

        $defaultProductId = 10;
        cart()->remove($defaultProductId);

        $this->assertCount(0, cart()->content());
    }

    public function testCountMethod()
    {
        $this->addItemsToCart(5);
        $this->addDefaultItemToCart(5);

        $this->assertEquals(10, cart()->count());
    }

    public function testTotalMethod()
    {
        $product1 = Product::create([
            'name' => 'Product 1',
            'price' => 1999,
        ]);

        $product2 = Product::create([
            'name' => 'Product 2',
            'price' => 1100,
        ]);

        cart()->add($product1->id, 5);
        cart()->add($product2->id, 1);

        $this->assertEquals(5 * 1999 + 1100, cart()->total());
    }

    /**
     * 
     * coupons are not available in demo version.
     */

    // public function testTotalWithCouponMethod()
    // {
    //     $this->addItemsToCart(5);
        //$this->addCoupon(); // by default fixed 30€ off

    //     $this->assertEquals(5 * 1999 - 3000, cart()->total());
    // }

    // public function testTotalWithPercentageCoupon()
    // {
    //     $this->addItemsToCart(5);
    //     $coupon = $this->generateCoupon('percentage', 'percent', 10);
    //     $this->addCoupon($coupon);

    //     $this->assertEqualsWithDelta(round(0.9*(5 * 1999)), cart()->totalWithCoupons(), 0.1);
    // }

    /**
     * @test
     */
    // public function checksCouponsAdded()
    // {
    //     $coupon = $this->generateCoupon('percentage', 'percent', 10);
    //     $this->addCoupon($coupon);
    //     $this->assertContains($coupon, cart()->getCoupons());
    // }
    /**
     * @test
     */
    // public function checksCouponsRemoved()
    // {
    //     $coupon = $this->generateCoupon($code = 'ABC', $type = 'fixed', $value = 3000);
    //     $coupon2 = $this->generateCoupon('123', 'percent', 10);

    //     $this->addCoupon($coupon);
    //     $this->addCoupon($coupon2);

    //     $this->assertContains($coupon, cart()->getCoupons());
    //     $this->assertContains($coupon2, cart()->getCoupons());

    //     cart()->removeCoupon($coupon);
    //     $this->assertNotContains($coupon, cart()->getCoupons());
    //     $this->assertContains($coupon2, cart()->getCoupons());

    //     cart()->removeCoupon($coupon2);
    //     $this->assertNotContains($coupon, cart()->getCoupons());
    //     $this->assertNotContains($coupon2, cart()->getCoupons());

    //     $this->assertCount(0, cart()->getCoupons());
    // }
}
