<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel - @yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ url('css/style.css') }}">

  @vite('resources/js/app.js')
  @vite('resources/css/app.css')
</head>

<body class="antialiased">
  <div class="relative py-4 px-6">
    <nav>
      <a href="{{ route('home.index') }}">Home</a>
      <a href="{{ route('home.about') }}">About</a>
      <a href="{{ route('home.contact') }}">Contact</a>
      <a href="{{ route('computers.index') }}">Computer</a>
      <a href="{{ route('computers.create') }}">Create</a>
    </nav>
  </div>
  <div class="relative flex min-h-screen justify-center bg-gray-100 py-4 dark:bg-gray-900 sm:items-center sm:pt-0">

    @yield('content')
  </div>
</body>

</html>
