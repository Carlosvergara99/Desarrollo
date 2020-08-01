

require('./bootstrap');

window.Vue = require('vue');

import App from './components/App.vue';

import VueRouter from 'vue-router';
import {routes} from './routes';
import toastr from 'toastr';
Vue.use(VueRouter);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),

});
