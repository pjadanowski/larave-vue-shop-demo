<script setup>

const props = defineProps({
    cartProducts: {
        type: Object,
        required: true
    },
    total: {
        type: String,
        required: true
    }
})

</script>

<template>
    <div>
        <div class="breadcrumb bg-gray-200 py-20">
            <div class="container">
                <div class="grid grid-cols-12 items-center">
                    <div class="lm:col-span-6 col-span-12">
                        <h1 class="text-center text-[36px] mb-[15px] md:mb-0">
                            Cart
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
            <div class="cart border-b border-[#ededed] lg:py-[90px] md:py-[80px] py-[50px]">
                <div class="container">
                    <div class="relative overflow-x-auto">
                        <table class="cart-table w-full text-sm text-left">
                            <thead class="text-[18px] bg-[#f4f5f7]">
                            <tr>
                                <th scope="col" class="font-medium product-name py-3 first:pl-[100px]">Product</th>
                                <th scope="col" class="font-medium product-price py-3 first:pl-[100px]">Price</th>
                                <th scope="col" class="font-medium py-3 first:pl-[100px]">Quantity</th>
                                <th scope="col" class="font-medium py-3 first:pl-[100px]">Total</th>
                                <th scope="col" class="font-medium py-3 sr-only-custom first:pl-[100px]">Item Remove
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in props.cartProducts" class="bg-white border-b">
                                <td class="py-4 product-name pr-[25px] flex items-center font-medium text-gray-900 whitespace-nowrap">
                                    <Link class="product-img w-[100px]" :href="item.url">
                                        <img :src="item.image" alt="Drinking Glasses">
                                    </Link>
                                    <h2 class="product-name">
                                        <Link class="text-[14px] transition-all hover:text-primary"
                                              :href="item.url">{{ item.name }}
                                        </Link>
                                    </h2>
                                </td>
                                <td class="py-4">{{ item.formatted_price }}</td>
                                <td class="py-4">
                                    <div class="relative inline-flex mr-[15px]">
                                        <div class="flex justify-center w-[120px]">
                                            <button type="button"
                                                    class="cursor-pointer text-center absolute dec top-1/2 -translate-y-1/2 left-[4px]">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 512 512" height="1em" width="1em"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" stroke-linecap="square" stroke-linejoin="round"
                                                          stroke-width="32" d="M400 256H112"></path>
                                                </svg>
                                            </button>
                                            <input
                                                class="qty-input outline-none text-center w-[100px] px-[15px] h-[46px] leading-[40px]"
                                                type="number" name="qtybutton" :value="item.quantity">
                                            <button type="button"
                                                    class="cursor-pointer text-center absolute inc top-1/2 -translate-y-1/2 right-[4px]">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 512 512" height="1em" width="1em"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" stroke-linecap="square" stroke-linejoin="round"
                                                          stroke-width="32" d="M256 112v288m144-144H112"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4">{{ item.total_formatted }}</td>
                                <td class="py-4 text-right">
                                    <button type="button" class="item-remove flex items-start text-[20px]">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 512 512" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="32" d="M368 368L144 144m224 0L144 368"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="group-btn flex justify-between pt-[50px]"><a
                        class="inline-flex items-center bg-black text-white h-[46px] sm:px-[42px] px-[12px] transition-all hover:bg-[#222222]"
                        href="/products/left-sidebar">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                             class="mr-[5px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="square" stroke-miterlimit="10" stroke-width="48"
                                  d="M244 400L100 256l144-144M120 256h292"></path>
                        </svg>
                        Continue Shopping</a>
                        <div class="btn-wrap">
                            <button type="button"
                                    class="inline-flex items-center border border-black h-[46px] sm:px-[42px] px-[12px] transition-all hover:bg-[#222222] hover:text-white">
                                Clear cart
                            </button>
                        </div>
                    </div>
                    <div class="cart-info pt-[50px]">
                        <div class="grid grid-cols-12 md:gap-x-[30px] max-lm:gap-y-[30px]">
                            <div class="md:col-span-6 col-span-12">
                                <div class="coupon flex flex-col lg:max-w-[400px]"><h2
                                    class="title text-[18px] mb-[30px]">
                                    Coupon Discount</h2>
                                    <p class="desc mb-[15px]">Enter your coupon code if you have one.</p>
                                    <input type="text"
                                           name="coupon"
                                           placeholder="Coupon code"
                                           class="border border-[#cccccc] outline-none p-[15px_15px_13px]">
                                    <div class="btn-wrap inline-flex items-center pt-[30px]">
                                        <button type="submit"
                                                class=" border border-black h-[46px] px-[42px] transition-all hover:bg-[#222222] hover:text-white">
                                            Apply coupon
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12">
                                <div class="cart-subtotal lg:max-w-[400px] ml-auto">
                                    <div class="border border-[#bfbfbf] bg-[#f9f9f9] px-[30px]">
                                        <ul class="content py-[30px]">
<!--                                            <li class="item flex justify-between border-b border-[#cdcdcd] pb-[16px] mb-[17px]">-->
<!--                                                <span class="font-bold">Subtotal:</span><span>$144.00</span></li>-->
                                            <li class="item flex justify-between"><span
                                                class="font-bold">Total:</span><span>{{ props.total }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="btn-wrap flex justify-center pt-[30px]"><a
                                        class="bg-black text-white h-[46px] leading-[46px] w-full text-center px-[42px] transition-all hover:bg-[#222222]"
                                        href="/checkout">Proceed to checkout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
