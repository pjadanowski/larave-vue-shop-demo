<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { computed } from '@vue/reactivity';
import { onMounted } from 'vue';


const itemsCount = computed(() => usePage().props.value.cart.itemsCount)

onMounted(() => {
    console.log(usePage().props.value.cart);
})
</script>

<template>
    <header id="siteHeader" class="w-full h-16 sm:h-20 lg:h-24 relative z-20 ">
        <div
            class="innerSticky border-b border-gray-300 mb-0 text-gray-700 body-font fixed bg-white w-full h-16 sm:h-20 lg:h-24 z-20 pl-4 lg:pl-6 pr-4 lg:pr-6 pr-4 lg:pr-6 pl-4 lg:pl-6 transition duration-200 ease-in-out"
        >
            <div
                class="flex items-center justify-center mx-auto max-w-[1920px] h-full w-full"
            >
                <button
                    aria-label="Menu"
                    class="menuBtn md:flex hidden lg:hidden px-5 2xl:px-7 flex-col items-center justify-center flex-shrink-0 h-full outline-none focus:outline-none"
                >
                    <span class="menuIcon"
                        ><span class="bar"></span><span class="bar"></span
                        ><span class="bar"></span
                    ></span></button
                ><Link class="inline-flex shrink-0 focus:outline-none" href="/"><span class="font-bold">Shop Demo</span></Link>
                <nav
                    class="headerMenu flex w-full relative hidden lg:flex md:ml-6 xl:ml-10 md:mr-6 xl:mr-10"
                >
                    <div class="menuItem group cursor-pointer py-7 relative">
                        <Link
                            class="inline-flex items-center text-sm xl:text-base text-heading px-3 xl:px-4 py-2 font-normal relative group-hover:text-black"
                            href="/"
                            >Home</Link>
                    </div>
                    <div class="menuItem group cursor-pointer py-7 relative">
                        <Link
                            class="inline-flex items-center text-sm xl:text-base text-heading px-3 xl:px-4 py-2 font-normal relative group-hover:text-black"
                            :href="route('shop')"
                            >Shop</Link>
                    </div>
   
                </nav>
                <div
                    class="hidden md:flex justify-end items-center space-x-6 lg:space-x-5 xl:space-x-8 2xl:space-x-10 space-x-reverse ml-auto mr-auto flex-shrink-0"
                >
                    <button
                        class="flex items-center justify-center flex-shrink-0 h-auto relative focus:outline-none transform"
                        aria-label="search-button"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17px"
                            height="18px"
                            viewBox="0 0 18.942 20"
                            class="md:w-4 xl:w-5 md:h-4 xl:h-5"
                        >
                            <path
                                d="M381.768,385.4l3.583,3.576c.186.186.378.366.552.562a.993.993,0,1,1-1.429,1.375c-1.208-1.186-2.422-2.368-3.585-3.6a1.026,1.026,0,0,0-1.473-.246,8.343,8.343,0,1,1-3.671-15.785,8.369,8.369,0,0,1,6.663,13.262C382.229,384.815,382.025,385.063,381.768,385.4Zm-6.152.579a6.342,6.342,0,1,0-6.306-6.355A6.305,6.305,0,0,0,375.615,385.983Z"
                                transform="translate(-367.297 -371.285)"
                                fill="currentColor"
                                fill-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <div class="-mt-0.5 flex-shrink-0">
                        <button
                            class="text-sm xl:text-base text-heading font-semibold focus:outline-none"
                        >
                            Sign In
                        </button>
                    </div>
                    <button
                        class="flex items-center justify-center flex-shrink-0 h-auto relative focus:outline-none transform"
                        aria-label="cart-button"
                    >
                        <Link :href="route('cart.index')">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="18px"
                                height="18px"
                                viewBox="0 0 20 20"
                                class="md:w-4 xl:w-5 md:h-4 xl:h-5"
                            >
                                <path
                                    d="M5,4H19a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4ZM2,5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3V19a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3Zm10,7C9.239,12,7,9.314,7,6H9c0,2.566,1.669,4,3,4s3-1.434,3-4h2C17,9.314,14.761,12,12,12Z"
                                    transform="translate(-2 -2)"
                                    fill="currentColor"
                                    fill-rule="evenodd"
                                ></path></svg>
                            <span class="cart-counter-badge flex items-center justify-center bg-heading text-white absolute -top-3 -right-2.5 xl:-right-3 left-2.5 xl:left-3 rounded-full font-bold">
                                {{ itemsCount }}</span>
                        </Link>

                    </button>
                </div>
            </div>
        </div>
    </header>
</template>
