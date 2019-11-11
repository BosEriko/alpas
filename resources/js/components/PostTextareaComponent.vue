<template>
      <form method="POST" action="/post">
        <textarea class="w-full rounded-t bg-gray-800 p-5 mb-0 align-bottom text-white" placeholder="Say something..." name="content"></textarea>
        <input class="hidden" name="post_date" :value="new Date().toJSON().slice(0,10).replace(/-/g,'/')"/>
        <input class="hidden" name="post_time" :value="new Date().toTimeString().split(' ')[0]"/>
        <input class="hidden" name="band_id" :value="band"/>
        <input class="hidden" name="user_id" :value="user"/>
        <div class="bg-gray-800 p-5 rounded-b flex items-center">
          <ul class="flex text-xl hidden">
            <li class="mr-3"><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="mr-3"><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-smile-o" aria-hidden="true"></i></a></li>
            <li class="mr-3"><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-microphone" aria-hidden="true"></i></a></li>
          </ul>
          <button type="submit" class="ml-auto rounded bg-gray-500 text-gray-900 px-5 pb-1 pt-2 hover:bg-white smooth">Post</button>
        </div>
      </form>
</template>

<script>
    export default {
        props: ['band', 'user'],
        mounted() {
            console.log("Post Textarea is mounted.");
        }
    }
</script>
