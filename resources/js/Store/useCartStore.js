import { defineStore } from "pinia";

export const useCartStore = defineStore("cartStore", {
    state: () => ({ content: {}, open: false }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {
        add(productId, quantity) {

        },
        openAside() {
            this.open = true;
        },
        closeAside() {
            this.open = false;
        },
    },
});
