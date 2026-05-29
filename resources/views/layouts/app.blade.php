<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="x-ua-compatible"/>
    <meta name="description" content="Booking Layanan Internet ISP"/>
    <title>{{ $title ?? 'LayananINET' }}</title>
    <!-- Tabler CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta.22/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/tabler-icons.css" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary">
    <script>
      if (window.self == window.top) {
        document.documentElement.style.display='block'
      } else {
        window.top.location = window.self.location;
      }
    </script>
    <div class="wrapper">
      @include('layouts.navbar')
      @include('layouts.sidebar')
      <div class="page-wrapper">
        <div class="container-xl">
          @include('layouts.breadcrumb')
        </div>
        <div class="page-body">
          <div class="container-xl">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    <!-- Tabler CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta.22/dist/js/tabler.min.js"></script>
  </body>
</html>