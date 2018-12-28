
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import NProgress from 'nprogress';
require('nprogress/nprogress.css');
// import '/node_modules/nprogress/nprogress.css';
import store from './store';
// import axios from 'Axios';

Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('nav-component', require('./components/NavComponent.vue'));
Vue.component('sidebar-component', require('./components/SideBarComponent.vue'));
Vue.component('navbar-component', require('./components/NavbarComponent.vue'));
Vue.component('card-component', require('./components/CardComponent.vue'));
Vue.component('search-component', require('./components/SearchComponent.vue'));
Vue.component('foot-component', require('./components/FooterComponent.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const router = new VueRouter({
    mode: 'history',
    routes
});

router.beforeResolve((to, from, next) => {
  // If this isn't an initial page load.
  if (to.name) {
      // Start the route progress bar.
      NProgress.set(0.4);
  }
  next()
})

router.afterEach((to, from) => {
  // Complete the animation of the route progress bar.
  NProgress.done()
})

const app = new Vue({
    el: '#app',
    router,
    store
});
