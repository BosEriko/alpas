<template>
    <div>
        <ul class="text-white">
            <li v-for="band in bands">
                {{ band.name }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        mounted() {
            axios.get('/bands').then(res => this.bands = res.data.filter(band => band.user_id === this.user))
        },
        data: function () {
            return {
                bands: ``
            }
        }
    }
</script>
