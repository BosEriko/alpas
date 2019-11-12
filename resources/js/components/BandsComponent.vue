<template>
    <div>
        <h4 class="text-xl mb-3 mx-3 text-white pb-3 px-2 border-b border-gray-700">Bands</h4>
        <ul class="text-white mx-3 px-3">
            <li v-for="band in bands" class="mb-2 flex">
                <span class="mr-2"><i class="fa fa-fw fa-music" aria-hidden="true"></i></span>
                <a :href="`/profile/${band.id}`" class="hover:underline mr-auto">{{ band.name }}</a>
                <a :href="`/delete-band/${band.id}`" class="hover:text-red-600 smooth"><i class="fa fa-fw fa-close" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/bands').then(res => this.bands = res.data)
        },
        data: function () {
            return {
                bands: ``
            }
        }
    }
</script>
