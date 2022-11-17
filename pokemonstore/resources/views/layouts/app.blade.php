<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ __('Pokemon Store') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">
          <a href="{{ route('home.index') }}">{{ __('Pokemon Store') }}</a>
        </p>
      </div>
      @include('partials/language_switcher')
      <div class="vr bg-white mx-2 d-none d-lg-block"></div>
      @guest
        <a class="nav-link active" href="{{ route('login') }}">Login</a>
        <a class="nav-link active" href="{{ route('register') }}">Register</a>
      @else
        <form id="logout" action="{{ route('logout') }}" method="POST">
          <a role="button" class="nav-link active"onclick="document.getElementById('logout').submit();">Logout</a>
          @csrf
        </form>
      @endguest
    </nav>
    @yield('content')
  </body>