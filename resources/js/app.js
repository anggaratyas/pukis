require('./bootstrap');

window.Vue = require('vue');

//import dependenci tambahan 
import Vue from 'vue'
import router from './router.js'
import store from './store.js'
import App from './App.vue'

new Vue({
    el: '#pks',
    router,
    store,
    components: {
        App
    }
})