<script setup>
import FeatureProductCard from '@/Components/FeatureProductCard.vue';

defineProps({
    products: {
        type: Array,
    }
})
</script>

<template>
    <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16 mt-20">
        <div class="mb-12 md:mb-14 xl:mb-16">
            <div
                class="flex items-center justify-between -mt-2 lg:-mt-2.5 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">Featured
                    Products</h3></div>
            <div class="grid grid-cols-4 grid-rows-2 gap-3 md:gap-5 xl:gap-7">

                <FeatureProductCard v-for="product in products.data" :key="product.id" :product="product"/>
            </div>
        </div>
    </div>
</template>
