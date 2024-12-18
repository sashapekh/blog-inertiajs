import { createInertiaApp } from '@inertiajs/vue3';
import './bootstrap';
import { createApp, h } from 'vue';
import DefaultTemplate from '@/Layouts/DefaultTemplate.vue';
import { ZiggyVue } from 'ziggy-js';


createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true});
        const page = pages[`./Pages/${name}.vue`];
        
        if(!page) { throw new Error(`Page ${name} not found`); }

        page.default.layout = page.default.layout || DefaultTemplate;
        return page;
    },
    setup({el, App, props, plugin}) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    }
})