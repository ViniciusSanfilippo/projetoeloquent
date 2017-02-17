<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>@yield('page-header-contant')</h1>
      </div>

      @yield('content');

    </div>

    <script type="text/javascript" src="/js/app.js" >
  </body>
</html>
