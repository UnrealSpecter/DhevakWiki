<!DOCTYPE html>
<html lang="nl">
  <head>
    @include('partials._head')

    @yield('style')
  </head>
  <body>
    @include('partials._navbar')

    @yield('content')

    @include('partials._javascript')
  </body>
</html>
