<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} : @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  </head>
  <body>
    <header>
      @include('parts/header')
    </header>
    <main>
      <aside>
        @include('parts/aside')
      </aside>
      <section class="main-content">
        @yield('content')
        <footer>
          @include('parts/footer')
        </footer>
      </section>
    </main>

  </body>
</html>
