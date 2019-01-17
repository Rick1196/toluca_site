<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Meta -->
        <meta name="description" content="Sitio web de atencion ciudadana 2019-2021" />
        <meta name="keywords" content="Toluca, Alcaldia Toluca, Transparencia, Tramites Toluca" />
        <meta name="author" content="Nodo Innovacion">
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="3 days" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BlogRodolfo') }}</title>

        <!-- Styles -->

            <!-- Bootstrap core CSS -->
            <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            {{-- <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> --}}
            {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> --}}

            <!-- Revolution Slider CSS -->
            <link href="{{asset('css/themecss/revolution-slider.css')}}" rel="stylesheet">

            <!-- Lightbox CSS -->
            <link href="{{asset('css/themecss/lightbox.css')}}" rel="stylesheet">

            <!-- Animate CSS -->
            <link href="{{asset('css/themecss/animate.css')}}" rel="stylesheet">

            <!-- Theme CSS -->
            <link href="{{asset('css/smarton.css')}}" rel="stylesheet">

            <!-- Color CSS -->
            <link href="{{asset('css/colors/color-default.css')}}" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/toastr/toastr.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/sweetalert/sweetalert.css') }}">
            
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        {{-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed.png')}}"> --}}
        {{-- <link rel="shortcut icon" href="{{asset('ico/favicon.png')}}"> --}}
        <link rel="shortcut icon" href="{{ asset('ico/favicon.ico') }}"/>