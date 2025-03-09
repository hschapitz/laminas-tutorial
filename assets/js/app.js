import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { InertiaProgress } from '@inertiajs/progress';

createInertiaApp({
    resolve: name => {
        return import(`./Pages/${name}.vue`).then(module => {
            return module.default
        })
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
        app.use(plugin)
        app.mount(el)
    }
})


InertiaProgress.init();