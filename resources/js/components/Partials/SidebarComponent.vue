<template>
    <!-- NAVBAR -->
<div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
        </div>
        <div class="container-fluid">
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                        <a href="#"><span>Administrator</span></a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><router-link :to="{name: 'dashboard'}"><a><i class="lnr lnr-home"></i><span>Dashboard</span></a></router-link></li>
                    <li>
                        <a href="#products" data-toggle="collapse" class="collapsed"><i class="lnr lnr-eye"></i> <span>Products</span>
                            <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="products" class="collapse ">
                            <ul class="nav">
                                <li><router-link :to="{name: 'add.product'}"><a>Add Product </a></router-link></li>
                                <li><router-link :to="{name: 'all.product'}"><a>All Products</a></router-link></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
</div>
</template>


<script>
    export default {
    
    }
</script>
