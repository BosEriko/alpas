<template>
  <div>
    <div class="text-white">
        <div id="cover-photo" :style="`background-image: url('${data.cover_photo_path}')`"></div>
      <div class="container mx-auto lg:flex mb-10">
        <aside>
          <div class="bg-gray-900 rounded p-3" id="profile-picture">
            <img :src="data.profile_photo_path" alt="profile-picture" class="bg-white rounded w-full"/>
          </div>
          <ul class="flex flex-col my-3 px-5">
            <li class="mb-3">
              <span class="mr-2"><i class="fa fa-fw fa-music" aria-hidden="true"></i></span>
              <span>{{ data.genre }}</span>
            </li>
            <li class="mb-3">
              <span class="mr-2"><i class="fa fa-fw fa-location-arrow" aria-hidden="true"></i></span>
              <span>{{ data.location }}</span>
            </li>
            <li class="mb-3">
              <span class="mr-2"><i class="fa fa-fw fa-phone" aria-hidden="true"></i></span>
              <span>+{{ data.contact_number }}</span>
            </li>
            <li>
              <span class="mr-2"><i class="fa fa-fw fa-envelope" aria-hidden="true"></i></span>
              <span>{{ data.email }}</span>
            </li>
          </ul>
          <div class="mt-16 px-3">
            <h4 class="text-xl mb-3 pb-3 px-2 border-b border-gray-700">Upcoming Gig</h4>
            <ul class="px-2">
              <li class="mb-3">
                <span class="mr-2"><i class="fa fa-fw fa-map-marker" aria-hidden="true"></i></span>
                <span>MOA Arena</span>
              </li>
              <li class="mb-3">
                <span class="mr-2"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                <span>December 11, 2019</span>
              </li>
              <li>
                <span class="mr-2"><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                <span>8:00pm - 9:00pm</span>
              </li>
            </ul>
          </div>
        </aside>
        <div class="ml-5 my-5 flex-1">
          <div class="text-shadow flex items-center" id="namespace">
            <h4 class="text-3xl lg:text-6xl">{{ data.name }}</h4>
            <span v-if="parseInt(data.verified)" class="text-xl lg:text-4xl ml-5"><i id="verified-badge" class="fa fa-fw fa-check-circle" aria-hidden="true"></i></span>
            <button class="smooth shadow-md bg-red-600 hover:bg-red-700 border border-red-800 text-white font-bold pb-1 pt-2 px-4 ml-auto rounded text-sm lg:text-md ml-5 align-baseline">
              <span><i class="fa fa-fw fa-envelope" aria-hidden="true"></i></span>
              <span class="ml-1 hidden xl:inline">Message</span>
            </button>
            <button class="smooth shadow-md bg-green-600 hover:bg-green-700 border border-green-800 text-white font-bold pb-1 pt-2 px-4 ml-3 rounded text-sm lg:text-md ml-5 align-baseline">
              <span><i class="fa fa-fw fa-plus" aria-hidden="true"></i></span>
              <span class="ml-1 hidden xl:inline">Follow</span>
            </button>
          </div>
          <p class="mt-5 text-sm">
            {{ data.description }}
          </p>
          <div class="mt-5">
            <textarea class="w-full rounded-t bg-gray-800 p-5 mb-0 align-bottom" placeholder="Say something..."></textarea>
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
          <ul class="flex flex-col mt-5">
            <!-- post -->
            <li class="flex mb-5">
              <div class="w-20"><img src="https://i.imgur.com/yCBZppP.png" class="w-full bg-white rounded" alt="profile-picture" /></div>
              <div class="ml-5 p-5 rounded bg-gray-800 flex-1">
                <h4 class="text-lg font-bold">
                  <span>Linkin Park</span>
                  <span class="ml-1"><i class="fa fa-fw fa-check-circle" aria-hidden="true"></i></span>
                </h4>
                <p class="my-3">What time did the man go to the dentist? Tooth hurt-y.</p>
                <ul class="flex text-sm text-gray-500">
                  <li class="mr-3">
                    <span><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                    <span>8:01pm</span>
                  </li>
                  <li>
                    <span><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                    <span>August 5, 2019</span>
                  </li>
                </ul>
              </div>
            </li>
            <!-- /post -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['id'],
    mounted() {
      axios.get('/band/'+this.id).then(res => this.data = res.data)
      let coverPhoto = document.getElementById("cover-photo");
      window.addEventListener('scroll', () => {
        coverPhoto.style.backgroundPosition= `center ${window.pageYOffset/2}px`;
      });
      tippy('#verified-badge', {
        content: "Verified",
      });
    },
    data: function () {
        return {
            data: ``
        }
    }
  }
</script>
