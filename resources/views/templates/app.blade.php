<!DOCTYPE html>

<html lan="en">
  <head>
    <meta charset = "UTF-8">
    <title> Blog </title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700">
      <link rel="stylesheet" href="{{ asset("css/app.css") }}">

  </head>

  <body>
    @yield('header')

    <div class="container">
      @yield ('main')
    </div>

  </body>
</html>
