<template>
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