<template>
    <ul class="pr-5 py-5 whitespace-no-wrap overflow-x-scroll overflow-y-visible custom-scrollbar">
        <li class="ml-5 inline-block" v-for="gig in gigs">
            <Gig :data="gig" />
        </li>
    </ul>
</template>

<script>
    import Gig from './Gigs/GigComponent.vue'
    export default {
        components: {
            Gig
        },
        mounted() {
            axios.get('/gigs').then(res => this.gigs = res.data)
        },
        data: function () {
            return {
                gigs: ``
            }
        }
    }
</script>
