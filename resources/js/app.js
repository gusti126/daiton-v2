require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

require('livewire-vue');

import Vue from 'vue';
import 'livewire-vue';

window.Vue = Vue // 'require('vue');' won't work!

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar', require('./components/navbar.vue').default);
Vue.component('navbar2', require('./components/navbar2.vue').default);

const app = new Vue({
    el: '#app',
});