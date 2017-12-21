<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<link rel="stylesheet" href="css/custom.css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
		<div class="top-right links">
            <a href="/contact">Contact</a>
			@auth
			<a href="{{ url('/home') }}">Home</a>
			@else
			<a href="{{ route('login') }}">Login</a>
			<a href="{{ route('register') }}">Register</a>
			@endauth			
		</div>
		@endif

		<div class="content">

			@yield('content')

		</div>
	</div>
</body>

</html>