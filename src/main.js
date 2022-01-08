import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import routes from './../services/routes'

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import VueNavigationBar from 'vue-navigation-bar';

Vue.use(VueRouter);

const router = new VueRouter({
  routes: routes,
  mode: "history",
})



library.add(fab,fas)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.component("vue-navigation-bar", VueNavigationBar);

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router: router
}).$mount('#app')
