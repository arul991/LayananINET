<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="x-ua-compatible"/>
    <meta name="description" content="Booking Layanan Internet ISP"/>
    <title>LayananINET</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/demo.min.css') }}" rel="stylesheet"/>
  </head>
  <body class="border-top-wide border-primary d-flex flex-column">
    <div class="page">
      @yield('content')
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('assets/js/tabler.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo.min.js') }}"></script>
  </body>
</html>