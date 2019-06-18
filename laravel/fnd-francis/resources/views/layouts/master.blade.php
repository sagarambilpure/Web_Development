<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title')
    </title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>
      @yield('header')
    </h1>
    <img src="/images/dead_pool_yo.jpeg" alt="">
    @yield('content')
    <footer>
      Copyright 2018 All Rights Reserved
    </footer>
  </body>
</html>
