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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous" defer></script>
  
  <!-- AlpineJS -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@yield('body')

</html>