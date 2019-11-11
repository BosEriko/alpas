@extends('layouts.app')

@section('content')
<body class="font-comfortaa bg-gray-900" id="home">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="https://pingmin-tech.com/content/flipcard/flipcard.css" />
  <header class="bg-gray-800">
    <div class="container mx-auto flex py-5 items-center">
      <div class="logo flex-1 text-2xl">
        <span class="logo-head text-white bg-red-600 rounded pr-1 pl-4 pt-2 inline-block">a</span>
        <span class="logo-body pt-2 text-white">lpas</span>
      </div>
    </div>
  </header>
  <div class="bg-gray-700 mb-5">
    <div class="mx-auto container pt-5 text-white">
      <h4 class="font-bold">Upcoming Gigs</h4>
    </div>
    <ul class="pr-5 py-5 whitespace-no-wrap overflow-x-scroll overflow-y-visible custom-scrollbar">
      <!-- <card> -->
        <li class="ml-5 inline-block">
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
          <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
        </li>
        <!-- </card> -->
        <!-- <card> -->
          <li class="ml-5 inline-block">
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
            <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
          </li>
          <!-- </card> -->
          <!-- <card> -->
            <li class="ml-5 inline-block">
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
              <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
            </li>
            <!-- </card> -->
            <!-- <card> -->
              <li class="ml-5 inline-block">
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
                <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
              </li>
              <!-- </card> -->
              <!-- <card> -->
                <li class="ml-5 inline-block">
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
                  <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
                </li>
                <!-- </card> -->
                <!-- <card> -->
                  <li class="ml-5 inline-block">
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
                    <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
                  </li>
                  <!-- </card> -->
                  <!-- <card> -->
                    <li class="ml-5 inline-block">
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
                      <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
                    </li>
                    <!-- </card> -->
                    <!-- <card> -->
                      <li class="ml-5 inline-block">
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
                        <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
                      </li>
                      <!-- </card> -->
                      <!-- <card> -->
                        <li class="ml-5 inline-block">
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
                          <button class="card-flip bg-gray-800 hover:bg-gray-900 smooth px-5 py-3 text-white w-full rounded mt-5 shadow-md">Read More</button>
                        </li>
                        <!-- </card> -->
                      </ul>
                    </div>
                    <div class="container mx-auto lg:flex mb-10">
                      <aside>
                        <div class="px-3 text-white">
                          <h4 class="text-xl mb-3 pb-3 px-2 border-b border-gray-700">Trending Now</h4>
                          <ul class="px-2 mb-5">
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Babymetal</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Metallica</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Slayer</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Megadeth</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Anthrax</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>King</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Crossfaith</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Lamb of God</span>
                            </li>
                            <li class="mb-3">
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Dragonforce</span>
                            </li>
                            <li>
                              <span class="mr-2"><i class="fa fa-fw fa-hashtag" aria-hidden="true"></i></span>
                              <span>Slipknot</span>
                            </li>
                          </ul>
                        </div>
                      </aside>
                      <div class="flex-1">
                        <div>
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
                        <ul class="flex flex-col mt-5 text-white">
                          <!-- <post> -->
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
                            <!-- </post> -->
                            <!-- <post> -->
                              <li class="flex mb-5">
                                <div class="w-20"><img src="https://i.imgur.com/yCBZppP.png" class="w-full bg-white rounded" alt="profile-picture" /></div>
                                <div class="ml-5 p-5 rounded bg-gray-800 flex-1">
                                  <h4 class="text-lg font-bold">
                                    <span>Linkin Park</span>
                                    <span class="ml-1"><i class="fa fa-fw fa-check-circle" aria-hidden="true"></i></span>
                                  </h4>
                                  <p class="my-3">My dad literally told me this one last week: 'Did you hear about the guy who invented Lifesavers? They say he made a mint.'</p>
                                  <ul class="flex text-sm text-gray-500">
                                    <li class="mr-3">
                                      <span><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                                      <span>7:26pm</span>
                                    </li>
                                    <li>
                                      <span><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                                      <span>August 5, 2019</span>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <!-- </post> -->
                              <!-- <post> -->
                                <li class="flex mb-5">
                                  <div class="w-20"><img src="https://i.imgur.com/yCBZppP.png" class="w-full bg-white rounded" alt="profile-picture" /></div>
                                  <div class="ml-5 p-5 rounded bg-gray-800 flex-1">
                                    <h4 class="text-lg font-bold">
                                      <span>Linkin Park</span>
                                      <span class="ml-1"><i class="fa fa-fw fa-check-circle" aria-hidden="true"></i></span>
                                    </h4>
                                    <p class="my-3">A ham sandwich walks into a bar and orders a beer. Bartender says, 'Sorry we don't serve food here.'</p>
                                    <ul class="flex text-sm text-gray-500">
                                      <li class="mr-3">
                                        <span><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                                        <span>3:34pm</span>
                                      </li>
                                      <li>
                                        <span><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                                        <span>August 5, 2019</span>
                                      </li>
                                    </ul>
                                  </div>
                                </li>
                                <!-- </post> -->
                                <!-- <post> -->
                                  <li class="flex mb-5">
                                    <div class="w-20"><img src="https://i.imgur.com/yCBZppP.png" class="w-full bg-white rounded" alt="profile-picture" /></div>
                                    <div class="ml-5 p-5 rounded bg-gray-800 flex-1">
                                      <h4 class="text-lg font-bold">
                                        <span>Linkin Park</span>
                                        <span class="ml-1"><i class="fa fa-fw fa-check-circle" aria-hidden="true"></i></span>
                                      </h4>
                                      <p class="my-3">Whenever the cashier at the grocery store asks my dad if he would like the milk in a bag he replies, 'No, just leave it in the carton!'</p>
                                      <ul class="flex text-sm text-gray-500">
                                        <li class="mr-3">
                                          <span><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                                          <span>12:05pm</span>
                                        </li>
                                        <li>
                                          <span><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                                          <span>August 5, 2019</span>
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                  <!-- </post> -->
                                  <!-- <post> -->
                                    <li class="flex mb-5">
                                      <div class="w-20"><img src="https://i.imgur.com/yCBZppP.png" class="w-full bg-white rounded" alt="profile-picture" /></div>
                                      <div class="ml-5 p-5 rounded bg-gray-800 flex-1">
                                        <h4 class="text-lg font-bold">
                                          <span>Linkin Park</span>
                                          <span class="ml-1"><i class="fa fa-fw fa-check-circle" aria-hidden="true"></i></span>
                                        </h4>
                                        <p class="my-3">Why do chicken coops only have two doors? Because if they had four, they would be chicken sedans!</p>
                                        <ul class="flex text-sm text-gray-500">
                                          <li class="mr-3">
                                            <span><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                                            <span>10:38am</span>
                                          </li>
                                          <li>
                                            <span><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                                            <span>August 5, 2019</span>
                                          </li>
                                        </ul>
                                      </div>
                                    </li>
                                    <!-- </post> -->
                                    <!-- <post> -->
                                      <li class="flex">
                                        <div class="w-20"><img src="https://i.imgur.com/yCBZppP.png" class="w-full bg-white rounded" alt="profile-picture" /></div>
                                        <div class="ml-5 p-5 rounded bg-gray-800 flex-1">
                                          <h4 class="text-lg font-bold">
                                            <span>Linkin Park</span>
                                            <span class="ml-1"><i class="fa fa-fw fa-check-circle" aria-hidden="true"></i></span>
                                          </h4>
                                          <p class="my-3">Me: 'Dad, make me a sandwich!' Dad: 'Poof, You’re a sandwich!'</p>
                                          <ul class="flex text-sm text-gray-500">
                                            <li class="mr-3">
                                              <span><i class="fa fa-fw fa-clock-o" aria-hidden="true"></i></span>
                                              <span>8:56pm</span>
                                            </li>
                                            <li>
                                              <span><i class="fa fa-fw fa-calendar" aria-hidden="true"></i></span>
                                              <span>August 3, 2019</span>
                                            </li>
                                          </ul>
                                        </div>
                                      </li>
                                      <!-- </post> -->
                                    </ul>
                                  </div>
                                </div>
                                <footer class="text-white text-center pb-5">
                                  Alpas &copy; <script>document.write(new Date().getFullYear())</script>
                                </footer>
                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                                <script src="https://pingmin-tech.com/content/flipcard/flipcard.js"></script>
                                <script>
                                  $(function() {
                                    $(".card-flip").click(function() {
                                      $(this).siblings(".card-container").flip({ speed: '250ms' });
                                    });
                                  });
                                </script>
                              </body>
                              @endsection
