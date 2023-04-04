<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{env('APP_NAME')}} - @yield('page_name')</title>

  {{-- CDN --}}
  @yield('cdn')

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>

    @include('partials._header')

  <main>
    <section class="container">
        <h1 class="my-4">@yield('page_title')</h1>
        @yield('main_content')
    </section>
  </main>

  @yield('modals')
</body>

</html>
