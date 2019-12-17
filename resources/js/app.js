window.Vue = require('vue');
window.Axios = require('axios');

import ProductsComponent from './components/ProductsComponent.vue'
import StoresComponent from './components/StoresComponent.vue'
import CatalogComponent from './components/CatalogComponent.vue'

// Vue.component(
//     'product-component',
//     require('./components/ProductsComponent.vue').default
// );
// Vue.component(
//     'store-component',
//     require('./components/StoresComponent.vue').default
// );

const app = new Vue({
    el: '#app',
    components:{
        ProductsComponent,
        StoresComponent,
        CatalogComponent
    },
});
