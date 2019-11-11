<html lang="en">
  <head>
    <title>
      Alpas
    </title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/alpas.css') }}" />
  </head>
  <body class="font-comfortaa">
    <header class="fixed top-0 left-0 right-0 z-20">
      <div class="container mx-auto flex my-10 items-center">
        <div class="logo flex-1 text-2xl">
          <span class="logo-head bg-white text-red-600 rounded pr-1 pl-4 pt-2 inline-block">a</span>
          <span class="logo-body pt-2 text-white">lpas</span>
        </div>
        <ul class="flex text-white">
          <li class="mx-2"><a class="hover:underline" href="/login">Login</a></li>
          <li class="mx-2"><a class="hover:underline" href="/register">Register</a></li>
        </ul>
      </div>
    </header>
    <div class="h-screen bg-black relative z-10">
      <div id="particles-js" class="h-full w-full absolute top-0 left-0"></div>
      <div class="main-content absolute text-white text-center text-5xl">
        <div>An OPM community for</div>
        <div id="typed-strings">
          <p>students.</p>
          <p>teachers.</p>
          <p>drivers.</p>
          <p>developers.</p>
          <p>designers.</p>
          <p>musicians.</p>
          <p>you.</p>
        </div>
        <span id="typed"></span>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script>
      var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 50,
        backSpeed: 50
      });
      particlesJS("particles-js", {
          "particles": {
              "number": {
                  "value": 80,
                  "density": {
                      "enable": true,
                      "value_area": 800
                  }
              },
              "color": {
                  "value": "#ffffff"
              },
              "shape": {
                  "type": "circle",
                  "stroke": {
                      "width": 0,
                      "color": "#000000"
                  },
                  "polygon": {
                      "nb_sides": 5
                  },
                  "image": {
                      "src": "img/github.svg",
                      "width": 100,
                      "height": 100
                  }
              },
              "opacity": {
                  "value": 0.5,
                  "random": false,
                  "anim": {
                      "enable": false,
                      "speed": 1,
                      "opacity_min": 0.1,
                      "sync": false
                  }
              },
              "size": {
                  "value": 3,
                  "random": true,
                  "anim": {
                      "enable": false,
                      "speed": 40,
                      "size_min": 0.1,
                      "sync": false
                  }
              },
              "line_linked": {
                  "enable": true,
                  "distance": 150,
                  "color": "#ffffff",
                  "opacity": 0.4,
                  "width": 1
              },
              "move": {
                  "enable": true,
                  "speed": 6,
                  "direction": "none",
                  "random": false,
                  "straight": false,
                  "out_mode": "out",
                  "bounce": false,
                  "attract": {
                      "enable": false,
                      "rotateX": 600,
                      "rotateY": 1200
                  }
              }
          },
          "interactivity": {
              "detect_on": "canvas",
              "events": {
                  "onhover": {
                      "enable": true,
                      "mode": "repulse"
                  },
                  "onclick": {
                      "enable": true,
                      "mode": "push"
                  },
                  "resize": true
              },
              "modes": {
                  "grab": {
                      "distance": 400,
                      "line_linked": {
                          "opacity": 1
                      }
                  },
                  "bubble": {
                      "distance": 400,
                      "size": 40,
                      "duration": 2,
                      "opacity": 8,
                      "speed": 3
                  },
                  "repulse": {
                      "distance": 200,
                      "duration": 0.4
                  },
                  "push": {
                      "particles_nb": 4
                  },
                  "remove": {
                      "particles_nb": 2
                  }
              }
          },
          "retina_detect": true
      });
    </script>
  </body>
</html>
