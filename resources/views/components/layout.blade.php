<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="h-full">
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
             
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            @guest
            <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
            <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
            @endguest

            @auth
            
            <form action="/logout" method="post">
              @csrf
              <x-form-button>Log Out</x-form-button>
            </form>
           
            
            @endauth
            
          </div>
        </div>
      </div> <!-- Closing div for flex h-16 items-center justify-between -->
    </div> <!-- Closing div for mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 -->
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
      <x-button href="/jobs/create">Create Job</x-button>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      {{$slot}}
    </div>
  </main>
</div>

</body>
</html>


<!--
<nav>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/about" style="color:aquamarine">About</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
</nav>

    {{-- <--comment like this
    home kolai k dekhaune yeta lekhna parcha $slot use garera-->
    <!-- <?php
    //<!--echo $slot
    ?> equivalent
    {{$slot}}--> --}}
