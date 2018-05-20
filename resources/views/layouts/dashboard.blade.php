<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Welcome To  Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('dashboardcss/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboardcss/remodal.css')}}" rel="stylesheet">
    <link href="{{asset('dashboardcss/css/remodal-default.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('dashboardcss/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red">
<!-- Page Loader -->

@yield('dashboardcontent')
<!-- Jquery Core Js -->
<script src=" {{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/morrisjs/morris.js') }}"></script>

<!-- ChartJs -->
<script src="{{ asset('plugins/chartjs/Chart.bundle.js') }}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('dashboardjs/js/admin.js') }}"></script>
<script src="{{ asset('dashboardjs/js/pages/index.js') }}"></script>
<script src="{{ asset('dashboardjs/js/pages/forms/form-validation.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="{{asset('js/app.js')}}"></script>
<!-- Demo Js -->
<script src="{{ asset('dashboardjs/js/demo.js') }}"></script>
</body>

</html>