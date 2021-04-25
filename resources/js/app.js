require('./bootstrap');

import { App, plugin } from '@inertiajs/inertia-vue'
import VueQRCodeComponent from 'vue-qr-generator'
import Vue from 'vue'

Vue.use(plugin)
Vue.component('qr-code', VueQRCodeComponent)
  

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)