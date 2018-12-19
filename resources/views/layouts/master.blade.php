<!DOCTYPE html>
<html lang="en">
  <head>
    @include('front.head')
  </head>
  <body>
    @include('front.header')
    @yield('content')
    @include('front.footer')
  </body>
</html>