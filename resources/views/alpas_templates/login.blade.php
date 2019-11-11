<html lang="en">
  <head>
    <title>
      Login | Alpas
    </title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/alpas.css') }}" />
  </head>
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
          <form>
            <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-5" placeholder="Email" type="email" />
            <input class="smooth w-full p-3 border-b-2 border-red-600 bg-transparent focus:border-teal-300 mb-10" placeholder="Password" type="password" />
            <button class="smooth bg-white hover:bg-red-600 hover:text-white text-red-600 font-bold p-3 rounded w-full">Login</button>
          </form>
        </div>
      </div>
      <footer class="text-white text-center p-5">
        Alpas &copy; <script>document.write(new Date().getFullYear())</script>
      </footer>
    </div>
  </body>
</html>
