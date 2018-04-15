<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>{{ config('app.name') }}</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
  />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/now-ui-kit.css?v=1.1.0') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet">
  <!--  Social tags      -->
  <meta name="keywords" content="{{ config('app.keywords') }}">
  <meta name="description" content="{{ config('app.description') }}"> @yield('meta_tags')
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-info fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown Menu</a>
          <a class="dropdown-item" href="{{ url('submission') }}">Submission</a>
          <a class="dropdown-item" href="{{ url('contact') }}">Contact</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fa fa-codepen"></i> Deep ATP
                </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
          aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" data-nav-image="assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Back to home" data-placement="bottom" href="{{ url('/') }}">
                            <i class="fa fa-home"></i>
                            <p>HOME</p>
                        </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Submit your protein sequences" data-placement="bottom" href="{{ url('submission') }}">
                            <i class="fa fa-check-square"></i>
                            <p>SUBMISSION</p>
                        </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Feel free to ask us" data-placement="bottom" href="{{ url('contact') }}">
                            <i class="fa fa-envelope"></i>
                            <p>CONTACT</p>
                        </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    @yield('content')


  </div>
</body>
<footer class="footer footer-default">
  <div class="container">
    <div class="copyright">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, Supported by
      <a href="http://www.yzu.edu.tw/" target="_blank">Yuan Ze University</a>. Coded by 1607B Team.
    </div>
  </div>
</footer>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('assets/js/plugins/bootstrap-datepicker.js') }}"></script>
<!-- Share Library etc -->
<script src="{{ asset('assets/js/plugins/jquery.sharrre.js') }}"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/now-ui-kit.js?v=1.1.0') }}"></script>

</html>