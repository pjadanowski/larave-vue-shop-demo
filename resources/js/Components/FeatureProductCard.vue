<script setup>
const props = defineProps({
    product: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <Link :href="product.url">
        <div
            class="col-span-2 lg:col-span-1 cursor-pointer group flex flex-col bg-gray-200 rounded-md relative items-center justify-between overflow-hidden">
            <div class="flex justify-center items-center p-4 h-full 3xl:min-h-[330px] "
                 :title="props.product.name">
                <div
                    style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                    <div style="box-sizing: border-box; display: block; max-width: 100%;">
                        <img alt=""
                             aria-hidden="true"
                             :src="props.product.image"
                             style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                    </div>
                    <img alt="Nike Comfy Vapor Maxpro"
                         :src="props.product.image"
                         class="object-cover transition duration-500 ease-in-out transform group-hover:scale-110"
                         style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                         srcset="">
                </div>
            </div>
            <div
                class="flex flex-col w-full px-4 md:px-5 3xl:px-7 pb-4 md:pb-5 3xl:pb-7 md:justify-between md:items-center md:flex-row 2xl:flex-row lg:items-start 2xl:items-center lg:flex-col"
                :title="props.product.name">
                <div
                    class="ltr:md:pr-2 ltr:lg:pr-0 ltr:2xl:pr-2 rtl:md:pl-2 rtl:lg:pl-0 rtl:2xl:pl-2 overflow-hidden">
                    <h2 class="text-heading font-semibold text-sm md:text-base xl:text-lg mb-1 truncate">
                        {{ props.product.name }}</h2>
                    <p class="text-body text-xs md:text-[13px] xl:text-sm leading-normal xl:leading-relaxed truncate max-w-[250px] lg:max-w-[190px]">
                        {{ props.product.category.name}}</p></div>
                <div
                    class="flex-shrink-0 flex flex-row-reverse md:flex-col lg:flex-row-reverse 2xl:flex-col justify-end mt-2 md:-mt-0.5 lg:mt-2 2xl:-mt-0.5 items-center md:items-end lg:items-start 2xl:items-end ltr:md:text-right rtl:md:text-left ltr:lg:text-left rtl:lg:text-right ltr:xl:text-right rtl:xl:text-left">
                    <div
                        class="text-heading font-segoe font-semibold text-base xl:text-xl 3xl:text-2xl 3xl:mt-0.5 ltr:pr-2 ltr:md:pr-0 ltr:lg:pr-2 ltr:2xl:pr-0 rtl:pl-2 rtl:md:pl-0 rtl:lg:pl-2 rtl:2xl:pl-0">
                        {{ props.product.price }}
                    </div>
                </div>
            </div>
        </div>
    </Link>

</template>
