<script setup>
import NavbarTop from '@/Shared/NavbarTop.vue';
import CartAside from '../Components/Shop/CartAside.vue';
</script>

<template>
    <div class="flex flex-col min-h-screen">
        <NavbarTop />

        <main class="relative flex-grow" style="min-height: -webkit-fill-available">
            <slot />
        </main>

        <!-- <CartAside /> -->
    </div>
</template>
