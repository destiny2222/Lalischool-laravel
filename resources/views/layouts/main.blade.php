<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | Lali Perparatory School</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{  asset('assets/images/logo/logo.png')  }}">
	<link rel="apple-touch-icon" href="{{  asset('assets/images/logo/logo.png')  }}">
	<!-- Google font (font-family: 'Dosis', Roboto;) -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{  asset('assets/css/bootstrap.min.css')   }}">
	<link rel="stylesheet" href="{{  asset('assets/css/plugins.css')   }}">
	<link rel="stylesheet" href="{{  asset('assets/style.css')   }}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{  asset('css/custom.css')  }}">
   @livewireStyles
	<!-- Modernizer js -->
	<script defer src="{{  asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>


	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		@include('layouts.header')

         
        @yield('content')

       
        @include('layouts.footer')


	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{   asset('assets/js/vendor/jquery-3.2.1.min.js')   }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="  {{ asset('assets/js/bootstrap.min.js') }} "></script>
	<script src="  {{  asset('assets/js/plugins.js') }} "></script>
	<script src="{{  asset('assets/js/active.js') }}"></script>
	@livewireScripts
</body>

</html>