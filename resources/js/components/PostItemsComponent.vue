<template>
      <ul class="flex flex-col mt-5 text-white">
        <li class="mb-5" v-for="post in posts">
          <div class="p-5 rounded bg-gray-800 flex-1">
            <h4 class="text-lg font-bold">
                <span>{{ users[post.user_id - 1].name }}</span>
            </h4>
            <p class="my-3">{{ post.content }}</p>
            <ul class="flex text-sm text-gray-500">
              <li class="mr-3">
                <span><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                <span>{{ post.post_time }}</span>
              </li>
              <li>
                <span><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                <span>{{ post.post_date }}</span>
              </li>
            </ul>
          </div>
        </li>
      </ul>
</template>

<script>
    export default {
        props: ['post'],
        mounted() {
            axios.get('/posts/' + this.post).then(res => this.posts = res.data)
            axios.get('/users').then(res => this.users = res.data)
        },
        data: function () {
            return {
                posts: ``,
                users: ``
            }
        }
    }
</script>
