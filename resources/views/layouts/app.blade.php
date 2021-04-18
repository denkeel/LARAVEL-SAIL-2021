<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="David Grzyb">
  <meta name="description" content="">

  <title>@yield('title', 'Laravel App')</title>

  <!-- Tailwind -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

    .font-family-karla {
      font-family: karla;
    }
  </style>

  <script src="{{ asset('js/app.js') }}" defer></script>

  @stack('js')

  <!-- Font Awesome -->
  <script src="{{ asset('js/font-awesome.5.13.0.all.min.js') }}" defer></script>

  <!-- AlpineJS -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script>
    const errors = {
      list: [],
      lastUpdate: Date.now()
    }
  </script>
  <!-- jQuery
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  -->

  <!-- Axios 
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  -->

  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@yield('body')

</html>