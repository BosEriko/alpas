<template>
      <div>
        <textarea class="w-full rounded-t bg-gray-800 p-5 mb-0 align-bottom text-white" placeholder="Say something..."></textarea>
        <div class="bg-gray-800 p-5 rounded-b flex items-center">
          <ul class="flex text-xl flex-1">
            <li class="mr-3"><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="mr-3"><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-smile-o" aria-hidden="true"></i></a></li>
            <li class="mr-3"><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="#" class="smooth text-gray-500 hover:text-white"><i class="fa fa-fw fa-microphone" aria-hidden="true"></i></a></li>
          </ul>
          <button class="rounded bg-gray-500 text-gray-900 px-5 pb-1 pt-2 hover:bg-white smooth">Post</button>
        </div>
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log("Post Textarea is mounted.");
        }
    }
</script>
