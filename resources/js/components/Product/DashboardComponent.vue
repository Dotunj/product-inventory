<template>
    <!-- OVERVIEW -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon">
                      <i class="fa fa-sticky-note"></i>
                    </span>
                                <p>
                                    <span class="number">{{productCount}}</span>
                                    <span class="title">Products</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                productCount: null
            };
        },
    
        created() {
            this.fetchProductCount();
        },
    
        methods: {
            fetchProductCount() {
                window.axios.get("/api/product/total").then(res => {
                    console.log(res);
                    this.productCount = res.data.data;
                });
            }
        }
    };
</script>
