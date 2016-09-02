<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ Config::get('app.name') }}</title>

    <!-- Styles -->
    <link href="/css/welcome.css" rel="stylesheet">
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      <div class="top-right links">
        @if(Auth::check())
        <a href="{{ URL::to('/dashboard') }}">Dashboard</a>
        @else
        <a href="{{ URL::to('/login') }}">Login</a>
        <a href="{{ URL::to('/register') }}">Register</a>
        @endif
      </div>

      <div class="content">
        <div class="title m-b-md"><span>{{ Config::get('app.name') }}</span></div>

        <div class="links">
          <a href="https://laravel.com/docs">Documentation</a>
          <a href="https://laracasts.com">Laracasts</a>
          <a href="https://laravel-news.com">News</a>
          <a href="https://forge.laravel.com">Forge</a>
          <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
      </div>
    </div>
  </body>
</html>
