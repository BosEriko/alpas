@extends('layouts.app')

@section('content')
<body class="font-comfortaa bg-black authentication">
  <div class="dark-filter filter min-h-screen min-w-screen flex flex-col">
    <header>
      <div class="container mx-auto flex my-10 items-center">
        <div class="logo flex-1 text-2xl">
          <span class="logo-head text-white bg-red-600 rounded pr-1 pl-4 pt-2 inline-block">a</span>
          <span class="logo-body pt-2 text-white">lpas</span>
        </div>
      </div>
    </header>
    <div class="flex-1 text-white flex items-center">
      <div class="alpas-container mx-auto">
        <h4 class="text-center mb-5 text-xl">Log into alpas</h4>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-10" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <div>
            <input class="form-check-input mb-10" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
            </label>
          </div>
          <button type="submit" class="smooth bg-white hover:bg-red-600 hover:text-white text-red-600 font-bold p-3 rounded w-full">Login</button>
          @if (Route::has('password.request'))
          <a class="text-center mt-5 block hover:underline" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
          @endif
        </form>
      </div>
    </div>
    <footer class="text-white text-center p-5">
      Alpas &copy; <script>document.write(new Date().getFullYear())</script>
    </footer>
  </div>
</body>
@endsection
