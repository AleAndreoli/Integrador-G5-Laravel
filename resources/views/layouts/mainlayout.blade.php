<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="/css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <title>@yield('title')</title>
  </head>
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
