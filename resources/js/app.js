/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//import VueRouter
import VueRouter from 'vue-router'
import MeTubeDashboard from './MeTube/MeTubeDashboard'
import VideoDetails from './MeTube/VideoDetails'

// use it
Vue.use(VueRouter);

window.eventBus = new Vue({});

// create vue routes
const routes = [
    {path: '/', component: MeTubeDashboard, 'name': 'metube-dashboard'},
    {path: '/video/:id', component: VideoDetails, 'name': 'single-video'}
];

// create an instance of VueRouter
const router = new VueRouter({
   routes
});

const app = new Vue({
    router
}).$mount('#app');
