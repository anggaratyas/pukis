import Vue from 'vue'
import router from './router.js'
import store from './store.js'
import App from './App.vue'

new Vue({
    el: '#pukis',
    router,
    store,
    components: {
        App
    }
})