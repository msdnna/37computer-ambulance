
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router').default;
window.VueAxios = require('vue-axios').default;
window.Axios = require('axios').default;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let AppLayout = require('./components/App.vue');
const HomePage = Vue.component('HomePage', require('./components/HomePage.vue'));
const ServicesPage = Vue.component('ServicesPage', require('./components/ServicesPage.vue'));
const ReviewsPage = Vue.component('ReviewsPage', require('./components/ReviewsPage.vue'));
const ContactsPage = Vue.component('ContactsPage', require('./components/ContactsPage.vue'));

Vue.use(VueRouter, VueAxios, Axios);

const routes = [
    {
        name: 'HomePage',
        path: '/',
        component: HomePage
    },
    {
        name: 'ServicesPage',
        path: '/show/services',
        component: ServicesPage
    },
    {
        name: 'ReviewsPage',
        path: '/show/reviews',
        component: ReviewsPage
    },
    {
        name: 'ContactsPage',
        path: '/show/contacts',
        component: ContactsPage
    }
];

const router = new VueRouter({ mode: 'history', routes: routes });

new Vue(
    Vue.util.extend(
        { router },
        AppLayout
    )
).$mount('#app');
