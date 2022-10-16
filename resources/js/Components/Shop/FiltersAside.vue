<script setup>
import { useCartStore } from "@/Store/useCartStore";
import { Inertia } from "@inertiajs/inertia";
import {onMounted, watch} from "vue";
const cartStore = useCartStore();

const props = defineProps({
    filters: {
        type: Object,
        required: true,
    },
    categories: {
        type: Object,
        required: true,
    },
});

onMounted(() => {
    cartStore.filters = props.filters
})

watch(
    () => cartStore.filters,
    (currVal) => {
        console.log(currVal);
        Inertia.get(route("shop", currVal), {}, {preserveState: true, replace: true});
    },
    {
        deep: true,
    }
);
</script>

<template>
    <div class="pt-1">
        <div class="block border-b border-gray-300 pb-7 mb-7">
            <div class="flex items-center justify-between mb-2.5">
                <h2 class="font-semibold text-heading text-xl md:text-2xl">
                    Filters
                </h2>
                <Link
                    :href="route('shop')"
                    class="flex-shrink text-xs mt-0.5 transition duration-150 ease-in focus:outline-none hover:text-heading"
                    aria-label="Clear All"
                >
                    Clear All
                </Link>
            </div>
            <div class="flex flex-wrap -m-1.5 pt-2"></div>
        </div>
        <div class="block border-b border-gray-300 pb-7 mb-7">
            <h3 class="text-heading text-sm md:text-base font-semibold mb-7">
                Category
            </h3>
            <div class="mt-2 flex flex-col space-y-4">
                <label
                    v-for="category in categories"
                    :key="category.id"
                    class="group flex items-center text-heading text-sm cursor-pointer"
                    ><input
                        type="checkbox"
                        class="form-checkbox w-5 h-5 border border-gray-300 rounded cursor-pointer transition duration-500 ease-in-out focus:ring-offset-0 text-heading hover:border-heading focus:outline-none focus:ring-0 focus-visible:outline-none checked:bg-heading ml-4 mr-4 -mt-0.5"
                        :name="category.name"
                        :value="category.slug"
                        v-model="cartStore.filters.categories" /><span
                        v-text="category.name"
                    ></span
                ></label>
            </div>
        </div>

        <div class="block border-b border-gray-300 pb-7 mb-7">
            <h3 class="text-heading text-sm md:text-base font-semibold mb-7">
                Price
            </h3>
            <div class="flex flex-col space-y-4">
                <form class="price-filter-form">
                    <div class="price-form-field mb-3">
                        <label class="flex mb-[5px]" for="priceForm"
                            >From</label
                        >
                        <div
                            class="flex items-center border border-gray-300 px-2.5 h-[45px]"
                        >
                            <span class="text-gray-600 pr-[5px]">$</span
                            ><input
                                required=""
                                id="priceForm"
                                type="number"
                                class="w-full border-none focus:outline-none"
                                placeholder="0"
                                min="0"
                                max="500"
                                v-model="cartStore.filters.priceMin"
                            />
                        </div>
                    </div>
                    <div class="price-form-field">
                        <label class="flex mb-[5px]" for="priceTo">To</label>
                        <div
                            class="flex items-center border border-gray-300 px-[10px] h-[45px]"
                        >
                            <span class="text-gray-600 pr-[5px]">$</span
                            ><input
                                required=""
                                id="priceTo"
                                type="number"
                                class="w-full border-none focus:outline-none"
                                placeholder="90"
                                min="0"
                                max="500"
                                v-model="cartStore.filters.priceMax"
                            />
                        </div>
                    </div>
                    <div class="price-btn-wrap pt-[20px]">
                        <button
                            type="submit"
                            class="flex items-center bg-black text-white px-[25px] py-[8px] h-[40px] transition-all hover:bg-primary"
                        >
                            Filter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
