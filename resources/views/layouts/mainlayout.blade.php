<!DOCTYPE html>
<html lang="es" dir="ltr">
  @include('layouts.head')
  <body>

    @include('layouts.header')

    @yield('slider')

    @yield('destacados')

    @yield('market')

    @yield('content')


    @include('layouts.footer')
    @include('layouts.scripts')

  </body>
</html>
