@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://unpkg.com/tippy.js@5/dist/backdrop.css" />
<body class="font-comfortaa bg-gray-900" id="profile">
  <header class="absolute top-0 left-0 right-0 z-20">
    <div class="container mx-auto flex my-10 items-center">
      <div class="logo flex-1 text-2xl">
        <span class="logo-head text-white bg-red-600 rounded pr-1 pl-4 pt-2 inline-block">a</span>
        <span class="logo-body pt-2 text-white">lpas</span>
      </div>
      <ul class="flex text-white">
        <li class="mx-2">
            <a class="dropdown-item hover:underline" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </ul>
    </div>
  </header>
  <div id="app">
    <profile-component id="{{ Request::route('id') }}"></profile-component>
  </div>
  <footer class="text-white text-center pb-5">
    Alpas &copy; <script>document.write(new Date().getFullYear())</script>
  </footer>
  <script src="https://unpkg.com/popper.js@1"></script>
  <script src="https://unpkg.com/tippy.js@5"></script>
  <script>
    let coverPhoto = document.getElementById("cover-photo");
    window.addEventListener('scroll', () => {
      coverPhoto.style.backgroundPosition= `center ${window.pageYOffset/2}px`;
    });
    tippy('#verified-badge', {
      content: "Verified",
    });
  </script>
</body>
@endsection
