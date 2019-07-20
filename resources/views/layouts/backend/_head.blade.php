<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

<title>{{ isset($title)?$title:config('app.name') }}</title>

<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.css') }}">

<link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.css') }}">

<!-- Bootstrap extend-->
<link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap-extend.css') }}">

<!-- theme style -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/master_style.css') }}">

<!-- Fab Admin skins -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/skins/_all-skins.css') }}">

@stack('library-css')
<!-- Vector CSS -->

@stack('custom-css')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

