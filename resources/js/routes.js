import dashboard from './components/Product/DashboardComponent.vue';
import addProduct from './components/Product/AddProductComponent.vue';
import allProduct from './components/Product/AllProductsComponent.vue';
import editProduct from './components/Product/EditProductComponent.vue';


export const routes = [
   { path: '/',
     component: dashboard,
     name: 'dashboard',
   },
   {
       path: '/add/product',
       component: addProduct,
       name: 'add.product'
   },
   {
       path: '/all/products',
       component: allProduct,
       name: 'all.product'
   },
   {
       path: '/product/edit/:id',
       component: editProduct,
       name: 'edit.product'
   }

]