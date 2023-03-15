<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  {{-- CDN Bulma --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  @yield('css')
</head>
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item brand" href="{{ route('home') }}"><strong>WEB PROG</strong></a>
      {{-- <div class="navbar-item">
      </div> --}}
    </div>

    {{-- <a class="button is-link is-rounded is-hovered is-size-7 home-btn" href="{{ route('home') }}">
      Home
    </a> --}}
    {{-- <div class="navbar-end">
    </div> --}}
    {{-- <div class="navbar-menu">
    </div> --}}
  </nav>
  <main class="is-flex container is-fluid">
    @yield('main')
  </main>
  <footer>
    <div class="has-text-centered">
      <p>
        Copyrights 2023
      </p>
    </div>
  </footer>
</body>
</html>