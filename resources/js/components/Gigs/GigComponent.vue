<template>
    <div>
        <div class="card-container shadow-md">
          <div class="card">
            <div class="bg-white rounded front">
              <div class="p-5 h-full w-full">
                <div class="h-full w-full bg-cover" style="background-image: url('https://i.imgur.com/yCBZppP.png');"></div>
              </div>
            </div>
            <div class="bg-gray-800 p-3 back text-white">
              <div class="p-3 h-full w-full">
                <ul class="flex flex-col h-full">
                  <li class="mb-3 mt-auto">
                    <span class="mr-2"><i class="fa fa-fw fa-money" aria-hidden="true"></i></span>
                    <span>₱ 15,000</span>
                  </li>
                  <li class="mb-3">
                    <span class="mr-2"><i class="fa fa-fw fa-map-marker" aria-hidden="true"></i></span>
                    <span>Manila</span>
                  </li>
                  <li class="mb-3">
                    <span class="mr-2"><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                    <span>8:00pm - 9:30pm</span>
                  </li>
                  <li class="mb-auto">
                    <span class="mr-2"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                    <span>December 24</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More {{ data.id }}</button>
    </div>
</template>

<script>
    export default {
        props: ['data'],
        mounted() {
            console.log(this.data)
        }
    }
</script>
