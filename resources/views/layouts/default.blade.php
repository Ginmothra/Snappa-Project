<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'test')</title>
    @yield('links')
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  </head>
  <body>
  @include('sweetalert::alert')
  <main>
    <style>
      body {
        font-family: 'inter';
      }
    </style>
    @yield('content')
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>