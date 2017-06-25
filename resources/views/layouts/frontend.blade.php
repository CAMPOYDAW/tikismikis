<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <title>Tikismikis - {{$title or ''}}</title>

    <!-- Bootstrap -->
    <link href="{{	url('/assets/bootstrap/css/bootstrap.min.css')	}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- front css -->
    <link href="{{	url('/css/style.css').'?'.random_int(1000,9999)	}}" rel="stylesheet">



    @if(!(Request::is('menus') or Request::is('login-public') or Request::is('situacion') or Request::is('/')))
        <link href="{{	url('/css/style2.css').'?'.random_int(1000,9999)	}}" rel="stylesheet">
    @endif

    <link href="{{	url('/css/comun.css').'?'.random_int(1000,9999)	}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script>
         var mensaje='{{ session()->get('mensaje') }}';
    </script>
    @if(isset($page))
        <script>var page='{{$page}}'</script>
        @else
        <script>var page=''</script>
    @endif



</head>

<body>
@include('partials.navbar')


    @yield('content')
<div class="limpia"></div>
    <footer>
@include ('partials.footer')
    </footer>
@yield('popup')
<div id="wait">
    <img src="{{url('img/wait.gif')}}" >
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{	url('/assets/bootstrap/js/bootstrap.min.js')	}}"></script>
<script src="{{	url('/assets/bootstrap/js/jQueryEasing1.3.js')	}}"></script>
<script src="{{	url('/assets/bootstrap/js/jquery.nicescroll.min.js')	}}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" src="{{url('/assets/bootstrap/css/select2.min.css')}}">
<script src="{{url('/assets/bootstrap/js/select2.min.js')}}"></script>
<script src="{{url('/assets/bootstrap/js/bootpopup.js')}}"></script>

@if(Request::is('carta'))
    <link rel="stylesheet" href="{{url('/assets/bootstrap/css/slider.css')}}" type="text/css">
    <script src="{{url('/assets/bootstrap/js/slider.js')}}"></script>
@endif
@if(Request::is('menus') or Request::is('login-public') or Request::is('situacion') or Request::is('/'))
    <script src="{{	url('/js/frontjs.js').'?'.random_int(1000,9999)	}}"></script>
    <script src="{{	url('/js/comunjs.js').'?'.random_int(1000,9999)	}}"></script>
@else
    <script src="{{	url('/js/frontjs2.js')	}}"></script>
@endif
</body>
</html>