<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daniel Shevchenko">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laravel App')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('js')

    <!-- Font Awesome -->
    <script src="{{ asset('js/font-awesome.5.13.0.all.min.js') }}" defer></script>

  <script>
    const errors = {
      list: [],
      lastUpdate: Date.now()
    }
  </script>

</head>

@yield('body')

</html>