<template>
    <table class="table-auto w-full">
        <thead>
            <tr>
              <th class="px-4 py-2">ID</th>
              <th class="px-4 py-2">Name</th>
              <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(user, index) in users">
                <td class="border px-4 py-2">{{ index + 1 }}</td>
                <td class="border px-4 py-2">{{ user.name }}</td>
                <td class="border px-4 py-2">{{ user.email }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        mounted() {
            axios.get('/users').then(res => this.users = res.data)
        },
        data: function () {
            return {
                users: ``
            }
        }
    }
</script>
