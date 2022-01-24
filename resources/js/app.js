require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue'

window.Vue = Vue;
Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    components: { App },
    template: "<App/>"
});