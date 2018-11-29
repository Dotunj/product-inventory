<template>
 <div class="main-content">
        <div class="container-fluid">
    
            <loading :active.sync="isLoading" :can-cancel="false" :is-full-page="fullPage"></loading>
    
            <div class="col-lg-6">
                <form class="form-vertical" @submit.prevent="validateBeforeSubmit">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input v-validate="'required|min:3'" type="text" name="name" class="form-control" v-model="name">
                        <span v-show="errors.has('name')" class="help-block error text-danger">{{errors.first('name')}}</span>
                    </div>
    
    
                    <div class="form-group">
                        <label for="quantity" class="control-label">Quantity</label>
                        <input v-validate="'required|numeric'" type="number" name="quantity" class="form-control" min="0" v-model="quantity">
                        <span v-show="errors.has('quantity')" class="help-block error text-danger">{{errors.first('quantity')}}</span>
                    </div>
    
                    <hr>
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
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
            name: null,
            quantity: null,
            identifier:null,
            isLoading: false,
            fullPage: true,
        }
    },

    components: {
        Loading
    },
    created(){
       this.isLoading = true
       this.identifier = this.$route.params.id
       this.fetchProduct()
    },

    methods: {
        fetchProduct(){
            window.axios.get('/api/product/' + this.identifier)
               .then(res => {
                 this.name = res.data.data.name
                 this.quantity = res.data.data.quantity
                 this.isLoading = false
            })
        },

        validateBeforeSubmit(){
            this.$validator.validateAll().then(result => {
                    if (result) {
                        this.updateProduct();
                    }
            });
        },

        updateProduct(){
            this.isLoading = true
            window.axios.put('/api/product/' + this.identifier, {
               name: this.name,
               quantity: this.quantity
            })
            .then(res => {
                console.log(res.data)
                this.name = res.data.data.name
                this.quantity = res.data.data.quantity
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
