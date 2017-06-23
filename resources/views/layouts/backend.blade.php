<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <title>{{ config('app.name', 'Laravel'). " - Administración" }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{	url('/assets/bootstrap/css/bootstrap.min.css')	}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <!-- back css -->
    <link href="{{	url('/css/back.css').'?'.random_int(1000,9999)	}}" rel="stylesheet">
    <link href="{{	url('/css/comun.css').'?'.random_int(1000,9999)	}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>
<body>
<div class="container-fluid">
    <div class="row">
        @yield('content')
    </div>
</div>
@yield('popup')
<div id="wait">
    <img src="{{url('img/wait.gif')}}" >
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{	url('/assets/bootstrap/js/bootstrap.min.js')	}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{	url('/assets/bootstrap/js/jquery.nicescroll.min.js')	}}"></script>
<link rel="stylesheet" src="{{url('/assets/bootstrap/css/select2.min.css')}}">
<script src="{{url('/assets/bootstrap/js/select2.min.js')}}"></script>
<script src="{{url('/assets/bootstrap/js/jquery.tablesorter.min.js')}}"></script>
<script src="{{ url('/assets/bootstrap/js/jquery.multi-select.js')  }}"></script>
<script src="{{ url('/js/backjs.js') }}"></script>
<script src="{{	url('/js/comunjs.js')}}"></script>
</body>
</html>