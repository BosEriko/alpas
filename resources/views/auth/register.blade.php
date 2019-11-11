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
        <h4 class="text-center mb-5 text-xl">Register at alpas</h4>
        <form>
          @csrf
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" placeholder="Full Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

          @error('name')
          <span class="invalid-feedback text-center block mb-10 text-red-700 text-sm" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

          @error('email')
          <span class="invalid-feedback text-center block mb-10 text-red-700 text-sm" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

          @error('password')
          <span class="invalid-feedback text-center block mb-10 text-red-700 text-sm" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-10" placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <button type="submit" class="smooth bg-white hover:bg-red-600 hover:text-white text-red-600 font-bold p-3 rounded w-full">Register</button>
        </form>
      </div>
    </div>
    <footer class="text-white text-center p-5">
      Alpas &copy; <script>document.write(new Date().getFullYear())</script>
    </footer>
  </div>
</body>
@endsection
