<!DOCTYPE html>
<html lang="en">




<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medboard</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ asset('assets/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{ asset('assets/assets/css/slick.css') }}" rel="stylesheet">
    <!-- medboard styles -->
    <link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet">

    <!-- Page Specific CSS (Morris Charts.css) -->
    <link href="{{ asset('assets/assets/css/morris.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Setting Panel -->
  @include('layout.erp.settings_preloader')
    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity"
        data-toggle="slideRight">
    </div>
    <!-- Sidebar Navigation Left -->
   @include('layout.erp.main_sidebar')
    <!-- Sidebar Right -->
   @include('layout.erp.right_sidebar')
    <!-- Main Content -->
    @yield('page')
    <!-- MODALS -->
    <!-- Reminder Modal -->
   @include('layout.erp.reminder')
    <!-- Notes Modal -->
   @include('layout.erp.notes')
    <!-- Modal -->
   @include('layout.erp.nav_appointment')
    <!-- Modal -->
  @include('layout.erp.nav_prescription')


    <!-- Modal -->
  @include('layout.erp.nav_report')
    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="{{ asset('assets/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/assets/js/jquery-ui.min.js') }}"></script>

    <!-- Global Required Scripts End -->
    <script src="{{ asset('assets/assets/js/d3.v3.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/topojson.v1.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/datamaps.all.min.js') }}"></script>


    <!-- Page Specific Scripts Start -->
    <script src="{{ asset('assets/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/assets/js/jquery.webticker.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/index-chart.js') }}"></script>

    <!-- Page Specific Scripts Finish -->
    <script src="{{ asset('assets/assets/js/calendar.js') }}"></script>
    <!-- medboard core JavaScript -->
    <script src="{{ asset('assets/assets/js/framework.js') }}"></script>
    <!-- Settings -->
    <script src="{{ asset('assets/assets/js/settings.js') }}"></script>
</body>



</html>
