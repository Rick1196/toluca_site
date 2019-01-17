<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>INICIO DE SESIÓN</title>
    @yield('stylee')
 
</head>
<body>
    <div class="limiter">
        @yield('content')
    </div>

    <!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }} "></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/animsition/js/animsition.min.js') }} "></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/bootstrap/js/popper.js') }} "></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }} "></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/select2/select2.min.js') }} "></script>
        <script>
            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/daterangepicker/moment.min.js') }} "></script>
        <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }} "></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/countdowntime/countdowntime.js') }} "></script>
    <!--===============================================================================================-->
        <script src="{{ asset('js/main.js') }} "></script>
</body>
</html>