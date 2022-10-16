import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createPinia } from 'pinia';
import { createInertiaApp, Link } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Toast, { POSITION } from "vue-toastification";
import "vue-toastification/dist/index.css";

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

const pinia = createPinia();

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        return resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ).then((page) => {
            page.default.layout ??= GuestLayout;
            return page;
        });
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(pinia)
            .use(Toast, {position: POSITION.BOTTOM_RIGHT})
            .use(ZiggyVue, Ziggy)
            .component("Link", Link)
            .mount(el);
    },
});

InertiaProgress.init({ color: "#4B5563" });
