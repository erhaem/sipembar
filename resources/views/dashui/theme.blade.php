<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @include('dashui.components.styles')
  <title>
    @yield('title') - SIPEMBAR
  </title>
</head>

<body class="bg-light">
  @yield('content')

  @include('dashui.components.scripts')
</body>

</html>