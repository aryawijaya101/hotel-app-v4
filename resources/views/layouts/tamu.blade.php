<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title) ? $title.' | '.config('app.name') : config('app.name') }}</title>

  {{-- aos --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  {{-- Roboto --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  {{--  --}}

  {{-- DM serif --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
  {{--  --}}

  {{-- oswald --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  {{--  --}}

  {{-- montserrat --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  {{--  --}}

  {{-- open sans --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  {{--  --}}

  {{-- quicksand --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  {{--  --}}

  {{-- playfair_display --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  {{--  --}}

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">


  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="/css/style.css">

  <link rel="stylesheet" href="/css/hover.css">

  <link rel="stylesheet" href="/css/footer.css">

  <link rel="stylesheet" href="/css/font.css">

  <style>
      body{
        overflow-x: hidden !important;
        background-color: #f7f1e7
      }

  </style>

</head>
<body class="hold-transition">
<!-- As a link -->
@include('layouts.inc_tamu.navbar')

<div class="container-fluid p-0" data-aos="fade-right"
data-aos-duration="2000">
    <img src="{{ url('images/banner_5.jpg') }}" class="img img-fluid w-100 mt-4">
</div>

{{-- <div class="container content"> --}}
<div class="content ">
    @yield('content')
</div>

<footer >
    <div class="footer-content">
        <h3 class="dm_serif_text">Sunshine Pangandaran Hotel</h3>
        <p class="roboto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius arcu a est tristique, non eleifend neque porttitor. Vivamus semper porta velit, eget mattis mauris tristique quis. Pellentesque sodales mi a ipsum mollis, maximus gravida justo sodales.</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/profile.php?id=100027055243247"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/Cedric56537991"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://github.com/aryawijaya101"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.instagram.com/wjyrxv/"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <div class="footer-bottom">
            <p>Copyright &copy;2022 Sunshine Pangandaran Hotel. designed by <span>Arya Wijaya</span></p>
        </div>

        {{-- <span class="text-muted"><strong>Copyright &copy; 2022 Arya Wijaya.</strong> All rights reserved.</span> --}}
    </div>
</footer>

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>

{{-- aos --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
