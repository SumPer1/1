<html>
  <head>
    <title>App Name - @yield('title')</title>
  </head>
  <body>
    @section('sidebar')
      Это главная боковая панель.
    @show

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
