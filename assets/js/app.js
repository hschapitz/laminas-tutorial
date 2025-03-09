import axios from 'axios';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { InertiaLink } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress';
import { resolveComponent } from 'vue'


// Manuelles Importieren der Seiten
import Home from './Pages/Home.vue'
import About from './Pages/About.vue'

createInertiaApp({
    resolve: name => {
        console.log("Lade Seite:", name)
        // Manuelle Zuordnung der Komponenten
        const pages = {
            Home,
            About
        }

        return pages[name] || Home // Falls eine Seite nicht gefunden wird, zurück zum Standard (Home)
    },
    setup({ el, App, props, plugin }) {
        console.log("Inertia setup", { el, App, props, plugin })
        console.log("resolveComponent exists?", typeof plugin?.resolveComponent)

        const app = createApp({ render: () => h(App, props) })
        app.use(plugin)
        app.mount(el)
    }
})


InertiaProgress.init();