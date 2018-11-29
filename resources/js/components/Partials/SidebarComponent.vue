<template>
    <!-- NAVBAR -->
<div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Administrator</span> <i
                                class="icon-submenu lnr lnr-chevron-down"></i></a>
                    </li>
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
                                <li><a href="" class="">All Products</a></li>
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
