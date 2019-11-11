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
    <div class="flex-1 text-white flex items-center">
      <div class="container mx-auto my-10">
        <h4 class="text-center mb-5 text-xl">Create a Band</h4>
        <form method="POST" action="/band">
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="name" placeholder="Name" autofocus />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="genre" placeholder="Genre" />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="profile_photo_path" placeholder="Profile Photo" />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="cover_photo_path" placeholder="Cover Photo" />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="verified" placeholder="Verified" />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="description" placeholder="Description" />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="location" placeholder="Location" />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="email" placeholder="Email" type="email" />
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" name="contact_number" placeholder="Contact Number" />
          <input class="hidden" name="user_id" value="{{ Auth::user()->id }}" />
          <button type="submit" class="smooth bg-white hover:bg-red-600 hover:text-white text-red-600 font-bold p-3 rounded w-full">Create Band</button>
        </form>
      </div>
    </div>
    <footer class="text-white text-center p-5">
      Alpas &copy; <script>document.write(new Date().getFullYear())</script>
    </footer>
  </div>
</body>
@endsection
