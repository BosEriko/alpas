@extends('layouts.app')

@section('content')
<body class="font-comfortaa bg-gray-900" id="home">
  <script src="https://pingmin-tech.com/content/flipcard/flipcard.js"></script>
  <link rel="stylesheet" type="text/css" href="https://pingmin-tech.com/content/flipcard/flipcard.css" />
  <header class="bg-gray-800">
    <div class="container mx-auto flex py-5 items-center">
      <div class="logo flex-1 text-2xl">
        <span class="logo-head text-white bg-red-600 rounded pr-1 pl-4 pt-2 inline-block">a</span>
        <span class="logo-body pt-2 text-white">lpas</span>
      </div>
      <ul class="flex text-white">
        <li class="mx-2"><a class="dropdown-item hover:underline" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </ul>
    </div>
  </header>
  <div class="bg-gray-700 mb-5" id="app">
    <div class="mx-auto container pt-5 text-white">
      <h4 class="font-bold">Upcoming Gigs</h4>
    </div>
    <gigs-component></gigs-component>
  </div>
  <div class="container mx-auto lg:flex mb-10">
    <aside>
      <div class="px-3 text-white">
        <a href="/create-band" class="smooth hover:bg-white bg-red-600 text-white hover:text-red-600 font-bold p-3 rounded block text-center">Create a Band</a>
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
  <footer class="text-white text-center pb-5">
    Alpas &copy; <script>document.write(new Date().getFullYear())</script>
  </footer>
  <script>
    $(function() {
      $(".card-flip").click(function() {
        $(this).siblings(".card-container").flip({ speed: '250ms' });
      });
    });
  </script>
</body>
@endsection
