<script setup>
defineProps({
    product: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <Link :href="product.url">
     <div
        class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pl-0 pb-2 lg:pb-3 flex-col items-start bg-white transition duration-200 ease-in-out transform hover:-translate-y-1 hover:md:-translate-y-1.5 hover:shadow-product"
        role="button"
        :title="product.name"
    >
        <div class="flex mb-3 md:mb-3.5">
            <div
                class="inline-block max-w-full relative overflow-hidden m-0"
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
                    class="absolute inset-0 bg-gray-300 object-cover rounded-l-md rounded-r-md w-full rounded-md transition duration-200 ease-in group-hover:rounded-b-none"
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
            class="w-full overflow-hidden pl-0 pr-0 lg:pl-2.5 xl:pl-4 lg:pr-2.5 xl:pr-4 pr-2.5 xl:pr-4 pl-2.5 xl:pl-4"
        >
            <h2
                class="text-heading font-semibold truncate mb-1 text-sm md:text-base"
            >
                {{ product.name }}
            </h2>
            <p
                class="text-body text-xs md:text-[13px] lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate"
            >
                {{ product.category.name }}
            </p>
            <div
                class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-1 space-x-reverse 3xl:text-lg lg:mt-2.5"
            >
                <span class="inline-block">{{ product.price }}</span>
            </div>
        </div>
    </div>
    </Link>
   
</template>
