<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div id="app">
        <header class="bg-blue-500 py-6 nav-dark">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-100 text-sm sm:text-base flex">
                    {{-- @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest --}}
                    <div class="px-4">
                      <input type="checkbox" class="checkbox" id="checkbox" onclick="toggle_light_mode()" aria-label="Dark Mode Toggle">
                      <label for="checkbox" class="label">
                        <i class="fas fa-moon"></i>
                        <i class='fas fa-sun'></i>
                        <div class='ball'>
                      </label>
                    </div>
                  </nav>
            </div>
        </header>
        {{-- <div class="container my-12 mx-auto px-4 md:px-12">
        </div> --}}
        @yield('content')
    </div>
</body>
</html>
<style>

body[light-mode="dark"] {
    background-color: #101b35;
    color: #9fa4b1;
}

body[light-mode="dark"] .light-mode-button span:nth-child(1) {
    background-color: #ced4e2;
    color: #141516;
}

body[light-mode="dark"] .light-mode-button span:nth-child(2) {
    left: 65px;
    background-color: #141516;
}

body[light-mode="dark"] a {
    color: #9fa4b1;
}
body[light-mode="dark"] h1 {
    color: #c8ccda;
}

body[light-mode="dark"] .nav-dark {
  background-color: #182747;
}
body[light-mode="dark"] .ql-toolbar {
    background-color: #c8ccda;
}
.checkbox {
  opacity: 0;
  position: absolute;
}

.label {
  width: 50px;
  height: 26px;
  background-color:#111;
  display: flex;
  border-radius:50px;
  align-items: center;
  justify-content: space-between;
  padding: 5px;
  position: relative;
  transform: scale(1.5);
}

.ball {
  width: 20px;
  height: 20px;
  background-color: white;
  position: absolute;
  top: 2px;
  left: 2px;
  border-radius: 50%;
  transition: transform 0.2s linear;
}

/*  target the elemenent after the label*/
.checkbox:checked + .label .ball{
  transform: translateX(24px);
}

.fa-moon {
  color: pink;
}

.fa-sun {
  color: yellow;
}

</style>
<script>
  function toggleTheme(){
      document.body.classList.toggle('dark-mode');
  }


  var app = document.getElementsByTagName("BODY")[0];
  if (localStorage.lightMode == "dark") {
      app.setAttribute("light-mode", "dark");
  }
  function toggle_light_mode() {
    var app = document.getElementsByTagName("BODY")[0];
    if (localStorage.lightMode == "dark") {
        localStorage.lightMode = "light";
        app.setAttribute("light-mode", "light");
    } else {
        localStorage.lightMode = "dark";
        app.setAttribute("light-mode", "dark");
    }
  }

  window.addEventListener(
    "storage",
    function () {
        if (localStorage.lightMode == "dark") {
            app.setAttribute("light-mode", "dark");
        } else {
            app.setAttribute("light-mode", "light");
        }
    },
    false
  );

</script>
