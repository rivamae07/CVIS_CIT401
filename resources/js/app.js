/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponents.vue').default);
Vue.component('product-add', require('./components/products/ProductAdd.vue').default);
Vue.component('product-edit', require('./components/products/ProductEdit.vue').default);
Vue.component('return-product', require('./components/return_products/ReturnProduct.vue').default);
Vue.component('return-product', require('./components/return_products/ReturnProduct.vue').default);
Vue.component('stock-manage', require('./components/stocks/StockManage.vue').default);
Vue.component('sold-product', require('./components/sold_products/SoldProduct.vue').default);

//Mobile Center
Vue.component('mobile-request-manage', require('./components/mobilerequests/RequestManage.vue').default);
Vue.component('mobile-return-product', require('./components/mobilereturn_products/ReturnProduct.vue').default);
Vue.component('mobile-sold-product', require('./components/mobilesold_products/SoldProduct.vue').default);

//City Hall
Vue.component('cityhall-request-manage', require('./components/cityhallrequests/RequestManage.vue').default);
Vue.component('cityhall-return-product', require('./components/cityhallreturn_products/ReturnProduct.vue').default);
Vue.component('cityhall-sold-product', require('./components/cityhallsold_products/SoldProduct.vue').default);


import store from './store'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store
});
