@extends('layouts.app')

@section('content')
<body class="font-comfortaa bg-gray-900" id="create-band">
  <div class="min-h-screen min-w-screen flex flex-col">
    <header class="bg-gray-800">
      <div class="container mx-auto flex py-5 items-center">
        <div class="logo flex-1 text-2xl">
          <span class="logo-head text-white bg-red-600 rounded pr-1 pl-4 pt-2 inline-block">a</span>
          <span class="logo-body pt-2 text-white">lpas</span>
        </div>
        <ul class="flex text-white">
            <li class="mx-2"><a class="hover:underline" href="/home">Home</a></li>
            <li class="mx-2"><a class="dropdown-item hover:underline" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
        </ul>
      </div>
    </header>
    <div class="flex-1 text-white" id="app">
      <div class="container mx-auto my-10">
          <h4 class="text-center mb-5 text-xl">List of Users</h4>
          <list-of-users></list-of-users>
      </div>
    </div>
    <footer class="text-white text-center p-5">
      Alpas &copy; <script>document.write(new Date().getFullYear())</script>
    </footer>
  </div>
</body>
@endsection
