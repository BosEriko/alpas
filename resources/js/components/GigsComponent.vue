<template>
    <ul class="pr-5 py-5 whitespace-no-wrap overflow-x-scroll overflow-y-visible custom-scrollbar">
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
        <Gigs />
    </ul>
</template>

<script>
    import Gigs from './Gigs/GigComponent.vue'
    export default {
        components: {
            Gigs
        },
        mounted() {
            console.log('Gigs mounted.')
        }
    }
</script>
