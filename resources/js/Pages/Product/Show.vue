<script setup>
import AddToCartBtn from '@/Components/Product/AddToCartBtn.vue';
defineProps({
    product: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <div>
        <div class="border-t border-gray-300 mb-0"></div>
        <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
            <div class="pt-8">
                <div class="chawkbazarBreadcrumb flex items-center">
                    <ol class="flex items-center w-full overflow-hidden">
                        <li
                            class="text-sm text-body px-2.5 hover:text-heading"
                        >
                            <Link href="/">Home</Link>
                        </li>
                        <li class="text-base text-body mt-0.5">/</li>
                        <li
                            class="text-sm text-body px-2.5 hover:text-heading"
                        >
                            <Link class="capitalize" href="/shop">Shop</Link>
                        </li>
                        <li class="text-base text-body mt-0.5">/</li>
                        <li
                            class="text-sm text-body px-2.5 hover:text-heading"
                        >
                            <Link class="capitalize" href="">{{
                                product.name
                            }}</Link>
                        </li>
                    </ol>
                </div>
            </div>
            <div
                class="block lg:grid grid-cols-9 gap-x-10 xl:gap-x-14 pt-7 pb-10 lg:pb-14 2xl:pb-20 items-start"
            >
                <div class="col-span-5 grid grid-cols-2 gap-2.5">
                    <div
                        class="col-span-1 transition duration-150 ease-in hover:opacity-90 flex"
                    >
                        <div
                            style="
                                display: inline-block;
                                max-width: 100%;
                                overflow: hidden;
                                position: relative;
                                box-sizing: border-box;
                                margin: 0px;
                            "
                        >
                            <div
                                style="
                                    box-sizing: border-box;
                                    display: block;
                                    max-width: 100%;
                                "
                            >
                                <img
                                    alt=""
                                    :src="product.image"
                                    style="
                                        max-width: 100%;
                                        display: block;
                                        margin: 0px;
                                        border: none;
                                        padding: 0px;
                                    "
                                />
                            </div>
                            <img
                                :alt="product.name"
                               :src="product.image"
                                class="object-cover w-full absolute inset-0"
                                style="
                                    box-sizing: border-box;
                                    padding: 0px;
                                    border: none;
                                    margin: auto;
                                    display: block;
                                    width: 0px;
                                    height: 0px;
                                    min-width: 100%;
                                    max-width: 100%;
                                    min-height: 100%;
                                    max-height: 100%;
                                "
                                srcset=""
                            />
                        </div>
                    </div>
                    <div
                        class="col-span-1 transition duration-150 ease-in hover:opacity-90 flex"
                    >
                        <div
                            style="
                                display: inline-block;
                                max-width: 100%;
                                overflow: hidden;
                                position: relative;
                                box-sizing: border-box;
                                margin: 0px;
                            "
                        >
                            <div
                                style="
                                    box-sizing: border-box;
                                    display: block;
                                    max-width: 100%;
                                "
                            >
                                <img
                                    alt=""
                                    aria-hidden="true"
                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDc1IiBoZWlnaHQ9IjYxOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="
                                    style="
                                        max-width: 100%;
                                        display: block;
                                        margin: 0px;
                                        border: none;
                                        padding: 0px;
                                    "
                                />
                            </div>
                            <img
                                :alt="product.name"
                                :src="product.image"
                                class="object-cover w-full"
                                style="
                                    position: absolute;
                                    inset: 0px;
                                    box-sizing: border-box;
                                    padding: 0px;
                                    border: none;
                                    margin: auto;
                                    display: block;
                                    width: 0px;
                                    height: 0px;
                                    min-width: 100%;
                                    max-width: 100%;
                                    min-height: 100%;
                                    max-height: 100%;
                                "
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-4 pt-8 lg:pt-0">
                    <div class="pb-7 border-b border-gray-300">
                        <h2
                            class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl font-bold hover:text-black mb-3.5"
                        >
                            {{ product.name }}
                        </h2>
                        <h3 class="stock font-semibold text-[14px] mb-[20px]">Available:<span class="text-[#3bc604] ml-[5px]">in-stock</span></h3>
                        <p
                            class="text-body text-sm lg:text-base leading-6 lg:leading-8"
                        >
                            {{ product.description }}
                        </p>
                        <div class="flex items-center mt-5">
                            <div
                                class="text-heading font-semibold text-base md:text-xl lg:text-2xl"
                            >
                                {{ product.price }}
                            </div>
                        </div>
                    </div>

                    <AddToCartBtn :product-id="product.id"/>

                    <div class="py-6">
                        <ul class="text-sm space-y-5 pb-1">
                            <li>
                                <span
                                    class="font-semibold text-heading inline-block pr-2 rtl:pl-2"
                                    >SKU:</span
                                >123
                            </li>
                            <li>
                                <span
                                    class="font-semibold text-heading inline-block pr-2 rtl:pl-2"
                                    >Category:</span
                                ><Link
                                    class="transition hover:underline hover:text-heading"
                                    :href="route('shop', {category: product.category.name})"
                                    >{{ product.category.name }}</Link
                                >
                            </li>
                            <li class="productTags">
                                <span
                                    class="font-semibold text-heading inline-block pr-2 rtl:pl-2"
                                    >Tags:</span
                                ><a
                                    class="inline-block pr-1.5 rtl:pl-1.5 transition hover:underline hover:text-heading last:pr-0 rtl:last:pl-0"
                                    href="#"
                                    >Sports<span class="text-heading"
                                        >,</span
                                    ></a
                                ><a
                                    class="inline-block pr-1.5 rtl:pl-1.5 transition hover:underline hover:text-heading last:pr-0 rtl:last:pl-0"
                                    href="#"
                                    >Women's Collection<span
                                        class="text-heading"
                                        >,</span
                                    ></a
                                >
                            </li>                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
