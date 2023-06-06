require('./bootstrap');

window.Vue = require('vue').default;

//Vue Good Table
import VueGoodTablePlugin from 'vue-good-table';
// import the styles
import 'vue-good-table/dist/vue-good-table.css'
Vue.use(VueGoodTablePlugin);

Vue.component('dashboard', require('./components/Dashboard.vue').default);

const app = new Vue({
    el: '#layoutSidenav',
});
