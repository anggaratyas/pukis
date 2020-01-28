<template>
    <div class="wrapper">
        <app-header v-if="isAuth" />

        <div class="content-wrapper">
            <router-view></router-view>
        </div>
        <app-footer v-if="isAuth" />
    </div>
</template>
<script>
    import { mapState, mapGetters } from 'vuex'
    export default {
        computed: {
            ...mapState(['token']),
            ...mapGetters(['isAuth'])
        }
    }
</script>