import dashboard from './components/Product/DashboardComponent.vue';
import addProduct from './components/Product/AddProductComponent.vue';


export const routes = [
   { path: '/',
     component: dashboard,
     name: 'dashboard'
   },
   {
       path: '/add/product',
       component: addProduct,
       name: 'add.product'
   }

]