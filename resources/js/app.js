import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from '@/layouts/MainLayout.vue'
import {ZiggyVue} from 'ziggy'
import '../css/app.css'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || MainLayout
    return page
    // return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin,ZiggyVue)
      .mixin({ methods: { route: window.route } })
      .mount(el)
  },
})

// npm install --save-dev eslint eslint-plugin-vue