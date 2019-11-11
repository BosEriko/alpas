@extends('layouts.app')

@section('content')
<body class="font-comfortaa bg-gray-900" id="home"><div id="app">
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
  <div class="bg-gray-700 hidden">
    <div class="mx-auto container pt-5 text-white">
      <h4 class="font-bold">Upcoming Gigs</h4>
      <gigs-component></gigs-component>
    </div>
  </div>
  <div class="container mt-10 mx-auto lg:flex mb-10">
    <aside class="lg:mr-5">
      @if(Auth::user()->role_id === "2")
      <div class="px-3 text-white">
          <a href="/list-of-users" class="smooth hover:bg-white bg-teal-600 text-white hover:text-teal-600 font-bold p-3 rounded block text-center mb-5">List of Users</a>
      </div>
      @endif
      <div class="px-3 text-white">
        <a href="/create-band" class="smooth hover:bg-white bg-red-600 text-white hover:text-red-600 font-bold p-3 rounded block text-center mb-5">Create a Band</a>
      </div>
      <bands-component user="{{ Auth::user()->id }}"></bands-component>
    </aside>
    <div class="flex-1">
      <post-textarea></post-textarea>
      <post-items post="0"></post-items>
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
</div></body>
@endsection
