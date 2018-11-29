<template>
    <div>
        <app-sidebar></app-sidebar>
        <div class="main">
            <router-view></router-view>
        </div>
    </div>
</template>


<script>
    import appSidebar from './partials/SidebarComponent'
    export default {
        components: {
            appSidebar
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
