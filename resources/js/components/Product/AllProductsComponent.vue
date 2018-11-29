<template>
    <div class="main-content">
        <div class="container-fluid">
            <loading :active.sync="isLoading" :can-cancel="false" :is-full-page="fullPage"></loading>
    
            <h3 class="page-title">All Products</h3>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8" >
                    <!-- BASIC TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(product, index) in products" :key="index">
                                        <td>{{product.name}}</td>
                                        <td>{{product.quantity}}</td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip"><button class="btn btn-success btn-xs" @click="editProduct(product.identifier)">
                                                 <span class="fa fa-pencil fa-fw"></span></button>
                                            </p>
                                        </td>
    
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" @click="deleteProduct(product.identifier)">
                                                <span class="fa fa-trash fa-fw"></span></button>
                                            </p>
                                        </td>
    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BASIC TABLE -->
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import Loading from 'vue-loading-overlay'
import 'vue-loading-overlay/dist/vue-loading.css';
    export default {
        data() {
            return {
                products: null,
                isLoading: false,
                fullPage: true,
            }
        },
        components: {
            Loading
        },

        created() {
            this.isLoading = true
            this.fetchProducts()
        },
    
        methods: {
            fetchProducts() {
                window.axios.get('/api/products')
                    .then(res => {
                        this.isLoading = false
                        this.products = res.data.data
                    })
            },
            editProduct(identifier){
                this.$router.push({
                    name: 'edit.product',
                    params:{
                        id: identifier
                    }
                })
            },
            deleteProduct(identifier){
                this.isLoading = true
                window.axios.delete('/api/product/' + identifier)
                .then(res => {
                    this.fetchProducts()
                    this.isLoading = false
                    this.$snotify.success(res.data.message, {
                            config: {
                                onClickClose: true,
                            }
                        });
                })
            }
        }
    }
</script>

