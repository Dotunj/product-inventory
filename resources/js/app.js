
require('./bootstrap');
import VueRouter from 'vue-router';
import { routes } from './routes';
import VeeValidate from 'vee-validate';
import {loadProgressBar} from 'axios-progress-bar'
import Snotify from 'vue-snotify';
import 'vue-snotify/styles/material.css'; 


window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.use(Snotify)

loadProgressBar();

const router = new VueRouter({
    mode: 'history',
    routes     
})


Vue.component('home-component', require('./components/HomeComponent.vue'));

const app = new Vue({
    el: '#wrapper',
    router
});
