<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QR Menú &mdash; Su carta en la web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ url('css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('css/fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    
  </head>
  <body>
    <div class="site-wrap">
    <main class="main-content">
        <div class="container-fluid photos">

        <div class="row pt-4 mb-5 text-center">
            <div class="col-12">
            <h1 class="text-white mb-4">QR Menú</h1>

            </div>
        </div>

        <div class="row align-items-stretch">
            @yield('content')
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12 text-center py-5">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | With <i class="icon-heart" aria-hidden="true"></i> by <a href="https://grupomam.com" target="_blank" >GrupoMAM</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
            </div>
        </div>
    </main>

</div> <!-- .site-wrap -->

  <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('js/jquery-ui.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url('js/aos.js') }}"></script>

  <script src="{{ url('js/jquery.fancybox.min.js') }}"></script>

  <script src="{{ url('js/main.js') }}"></script>
    
  </body>
</html>