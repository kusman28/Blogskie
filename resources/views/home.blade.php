@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                {{-- Dashboard --}}
                Welcome, {{ Auth::user()->name }}
            </header>
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
             <input onclick="toggleTheme()" type="checkbox" id="checkbox" />
             <div class="slider round"></div>
           </label>
             <em>Enable Dark Mode!</em>
           </div>
            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div>
            <button onclick="toggleTheme()">Change Theme</button>
        </section>
        <div class="content">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa sed natus omnis iusto cum officiis animi quia facere voluptate temporibus, et, tenetur nesciunt reprehenderit nobis fugit obcaecati magni a aspernatur.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit illum aut necessitatibus sunt quasi cum voluptatem rem provident molestiae, beatae mollitia voluptates cupiditate minima natus, iste eligendi! Facere, neque totam?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam error qui excepturi nam sapiente totam? Eligendi deleniti qui doloribus laudantium! Aliquam quibusdam necessitatibus ullam inventore illum quis neque autem nemo.</p>
          </div>
    </div>
</main>
@endsection
<style>
    body {
  transition:filter 300ms ease-in-out;
}
.content {
  padding:30px 100px;
  font-size:20px;
  color:#111;
  background:#eee;
}
/*slider switch css */
.theme-switch-wrapper {
  display: flex;
  align-items: center;
  
  em {
    margin-left: 10px;
    font-size: 1rem;
  }
}
.theme-switch {
  display: inline-block;
  height: 34px;
  position: relative;
  width: 60px;
}

.theme-switch input {
  display:none;
}

.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}

.slider:before {
  background-color: #fff;
  bottom: 4px;
  content: "";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: .4s;
  width: 26px;
}

input:checked + .slider {
  background-color: #66bb6a;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
body.dark-mode {
  filter:invert(1) hue-rotate(200deg) brightness(0.9);
}
</style>
<script>
    function toggleTheme(){
    document.body.classList.toggle('dark-mode');
}
</script>