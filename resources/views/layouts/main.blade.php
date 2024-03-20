<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  {{ env('APP_NAME') }} | @yield('title', Route::currentRouteName())    
  </title>
  @vite('resources/js/app.js')

  @yield('assets')
</head>
<body>
  <div class="main-wrapper">
    @include('layouts.partials.header')
    <main>
      @yield('maincontent')
    </main>
    @include('layouts.partials.footer')
  </div>

</body>
</html>