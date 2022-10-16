import { defineStore } from "pinia";

export const useCartStore = defineStore("cartStore", {
    state: () => ({
        content: {},
        filters: {
            categories: [],
            priceMin: null,
            priceMax: null
        }
    }),
    getters: {

    },
    actions: {

    },
});
