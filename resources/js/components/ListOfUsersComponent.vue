<template>
    <div>
        <div class="text-center mb-5">
            <button class="text-sm mx-3 smooth hover:bg-white bg-teal-600 text-white hover:text-teal-600 font-bold p-3 rounded text-center" v-on:click="defaultSort">Default List</button>
            <button class="text-sm mx-3 smooth hover:bg-white bg-teal-600 text-white hover:text-teal-600 font-bold p-3 rounded text-center" v-on:click="sortNewest">Newest to Oldest</button>
            <button class="text-sm mx-3 smooth hover:bg-white bg-teal-600 text-white hover:text-teal-600 font-bold p-3 rounded text-center" v-on:click="sortOldest">Oldest to Newest</button>
            <button class="text-sm mx-3 smooth hover:bg-white bg-teal-600 text-white hover:text-teal-600 font-bold p-3 rounded text-center" v-on:click="filterAdmin">Filter Admin</button>
        </div>
        <table class="table-auto w-full">
            <thead>
                <tr>
                  <th class="px-4 py-2">ID</th>
                  <th class="px-4 py-2">Name</th>
                  <th class="px-4 py-2">Email</th>
                  <th class="px-4 py-2">Admin Rights</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users">
                    <td class="border px-4 py-2">{{ user.id }}</td>
                    <td class="border px-4 py-2">{{ user.name }}</td>
                    <td class="border px-4 py-2">{{ user.email }}</td>
                    <td class="border px-4 py-2 text-center">{{ user.role_id === '2' ? '✔' : '' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/users').then(res => this.users = res.data)
        },
        methods: {
            defaultSort: function (e) {
                axios.get('/users').then(res => this.users = res.data)
            },
            sortNewest: function (e) {
                this.users.sort((a, b) => a.id - b.id);
            },
            sortOldest: function (e) {
                this.users.sort((a, b) => b.id - a.id);
            },
            filterAdmin: function (e) {
                this.users = this.users.filter(user => user.role_id === "2")
            }
        },
        data: function () {
            return {
                users: ``
            }
        }
    }
</script>
