<script setup>
import ProductCard from "@/Components/Shop/ProductCard.vue";
import {computed} from "vue";
import FiltersAside from "@/Components/Shop/FiltersAside.vue";

const props = defineProps({
    products: {
        type: Object,
        required: true,
    },
    filters: {
        type: Object,
        required: true,
    },
    categories: {
        type: Object,
        required: true,
    },
});

const hasNextPage = computed(
    () => props.products.meta.current_page < props.products.meta.last_page
);

</script>

<template>
    <div class="relative flex-grow">
        <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
            <div class="flex pt-8 pb-16 lg:pb-20">
                <div class="flex-shrink-0 pr-24 pl-24 hidden lg:block w-96">
                    <div class="relative top-0">
                        <div class="pb-7">
                            <div class="chawkbazarBreadcrumb flex items-center">
                                <ol
                                    class="flex items-center w-full overflow-hidden space-x-1"
                                >
                                    <li
                                        class="text-sm text-body px-2.5 hover:text-heading"
                                    >
                                        <Link href="/">Home</Link>
                                    </li>
                                    <li class="text-base text-body mt-0.5">
                                        /
                                    </li>
                                    <li
                                        class="text-sm text-body px-2.5 hover:text-heading"
                                    >
                                        <Link
                                            class="capitalize font-semibold text-heading"
                                            href="/shop"
                                            >Shop</Link
                                        >
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <FiltersAside
                            :categories="categories"
                            :filters="filters"
                        />
                    </div>
                </div>
                <div class="w-full lg:-ml-9 lg:-mr-9">
                    <div class="flex justify-between items-center mb-7">
                        <h1
                            class="text-2xl font-bold text-heading hidden lg:inline-flex pb-1"
                        >
                            Shop
                        </h1>
                        <button
                            class="lg:hidden text-heading text-sm px-4 py-2 font-semibold border border-gray-300 rounded-md flex items-center transition duration-200 ease-in-out focus:outline-none hover:bg-gray-200"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="18px"
                                height="14px"
                                viewBox="0 0 18 14"
                            >
                                <g
                                    id="Group_36196"
                                    data-name="Group 36196"
                                    transform="translate(-925 -1122.489)"
                                >
                                    <path
                                        id="Path_22590"
                                        data-name="Path 22590"
                                        d="M942.581,1295.564H925.419c-.231,0-.419-.336-.419-.75s.187-.75.419-.75h17.163c.231,0,.419.336.419.75S942.813,1295.564,942.581,1295.564Z"
                                        transform="translate(0 -169.575)"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        id="Path_22591"
                                        data-name="Path 22591"
                                        d="M942.581,1951.5H925.419c-.231,0-.419-.336-.419-.75s.187-.75.419-.75h17.163c.231,0,.419.336.419.75S942.813,1951.5,942.581,1951.5Z"
                                        transform="translate(0 -816.512)"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        id="Path_22593"
                                        data-name="Path 22593"
                                        d="M1163.713,1122.489a2.5,2.5,0,1,0,1.768.732A2.483,2.483,0,0,0,1163.713,1122.489Z"
                                        transform="translate(-233.213)"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        id="Path_22594"
                                        data-name="Path 22594"
                                        d="M2344.886,1779.157a2.5,2.5,0,1,0,.731,1.768A2.488,2.488,0,0,0,2344.886,1779.157Z"
                                        transform="translate(-1405.617 -646.936)"
                                        fill="currentColor"
                                    ></path>
                                </g>
                            </svg>
                            <span class="pl-2.5 pr-2.5">Filters</span>
                        </button>
                        <div class="flex items-center justify-end">
                            <div
                                class="flex-shrink-0 text-body text-xs md:text-sm leading-4 pr-4 pl-4 md:mr-6 md:ml-6 pl-2 pr-2 hidden lg:block"
                            >
                                Total: {{ products.meta.total }} items
                            </div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-x-3 lg:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8"
                    >
                        <!-- Product card -->

                        <ProductCard
                            v-for="product in products.data"
                            :product="product"
                            :key="product.id"
                        />
                    </div>

                    <div v-if="products.meta.total === 0" class="flex flex-col items-center">
                        <h3 class="w-full text-center text-lg lg:text-xl font-semibold text-heading my-7">Sorry, No Products Found</h3>
                    </div>
                    <div class="text-center pt-8 xl:pt-14" v-if="hasNextPage">
                        <Link
                            :href="products.links.next"
                            as="button"
                            class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none focus:bg-opacity-80 h-11 md:h-12 px-5 bg-heading text-white py-2 transform-none normal-case hover:text-white hover:bg-gray-600 hover:shadow-cart"
                        >
                            Next page
                        </Link>
                    </div>
                </div>
            </div>
            <div
                class="px-5 sm:px-8 md:px-16 2xl:px-24 flex flex-col justify-center xl:justify-between items-center rounded-lg bg-gray-200 py-10 md:py-14 lg:py-16 xl:flex-row"
            >
                <div
                    class="-mt-1.5 lg:-mt-2 xl:-mt-0.5 text-center xl:text-left xl:text-right mb-7 md:mb-8 lg:mb-9 xl:mb-0"
                >
                    <h3
                        class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold mb-2 md:mb-2.5 lg:mb-3 xl:mb-3.5"
                    >
                        Itaque hic cupiditate est exercitationem laudantium?
                    </h3>
                    <p
                        class="text-body text-xs md:text-sm leading-6 md:leading-7"
                    >
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
                <form
                    class="flex-shrink-0 w-full sm:w-96 md:w-[545px] z-10 relative"
                >
                    <div
                        class="flex flex-col sm:flex-row items-start justify-end"
                    >
                        <div class="w-full"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
