<script setup>
import { useToast } from "vue-toastification";

import { useForm, usePage } from '@inertiajs/inertia-vue3';
const toast = useToast();

const props = defineProps({
    productId: {
        type: Number,
        required: true,
    },
});

const form = useForm({
    productId: props.productId,
    quantity: 1 
})

const addToCart = () => {
    form.post(route('cart.add'), {
        onFinish: () => {
            form.reset('quantity')

            toast.success(usePage().props.value.flash.success, {
                timeout: 4000,
            });
        },
    });
};


const incrementQuantity = () => {
    form.quantity++;
}

const decrementQuantity = () => {
    if (form.quantity === 1) {
        return;
    }
    form.quantity--;
}

</script>

<template>
    <div
        class="flex items-center space-x-4 rtl:space-x-reverse md:pr-32 lg:pr-12 2xl:pr-32 3xl:pr-48 rtl:md:pl-32 rtl:lg:pl-12 rtl:2xl:pl-32 rtl:3xl:pl-48 border-b border-gray-300 py-8"
    >
        <div
            class="group flex items-center justify-between rounded-md overflow-hidden flex-shrink-0 border h-11 md:h-12 border-gray-300"
        >
            <button
                class="flex items-center justify-center flex-shrink-0 h-full transition ease-in-out duration-300 focus:outline-none w-10 md:w-12 text-heading border-r rtl:border-l border-gray-300 hover:text-white hover:bg-heading"
                :disabled="form.quantity <= 1"
                @click.prevent="decrementQuantity"

            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12px"
                    height="2px"
                    viewBox="0 0 12 1.5"
                >
                    <rect width="12px" height="2px" fill="currentColor"></rect>
                </svg></button
            ><span
                class="font-semibold flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default flex-shrink-0 text-base text-heading w-12 md:w-20 xl:w-24"
                >{{ form.quantity }}</span
            ><button
            @click.prevent="incrementQuantity"
                class="flex items-center justify-center h-full flex-shrink-0 transition ease-in-out duration-300 focus:outline-none w-10 md:w-12 text-heading border-l rtl:border-r border-gray-300 hover:text-white hover:bg-heading"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12px"
                    height="12px"
                    viewBox="0 0 12 12"
                >
                    <g data-name="Group 5367">
                        <path
                            data-name="Path 17138"
                            d="M6.749,5.251V0h-1.5V5.251H0v1.5H5.251V12h1.5V6.749H12v-1.5Z"
                            fill="currentColor"
                        ></path>
                    </g>
                </svg>
            </button>
        </div>
        <button
            @click.prevent="addToCart"
            :disabled="form.processing"
            class="md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none focus:bg-opacity-80 h-11 md:h-12 px-5 bg-heading text-white py-2 transform-none normal-case hover:text-white hover:bg-gray-600 hover:shadow-cart w-full md:w-6/12 xl:w-full false"
        >
            <span class="py-2 3xl:px-8">Add To Cart</span>
        </button>
    </div>
</template>
