<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>

  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
  @livewireStyles

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireScripts
  @stack('scripts')
</head>

<body class="font-sans">
  @yield('content')


</body>

</html>
