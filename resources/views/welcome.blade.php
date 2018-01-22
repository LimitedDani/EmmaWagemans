<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') EmmaWagemans</title>
	<!-- Styles -->
	@yield('assets')	
</head>

<body>

		@if (Route::has('login'))
            <a href="/contact">Contact</a>
			@auth
			<a href="{{ url('/home') }}">Home</a>
			@else
			<a href="{{ route('login') }}">Login</a>
			<a href="{{ route('register') }}">Register</a>
			@endauth			
		@endif

		<div class="content">

			@yield('content')

		</div>
	</div>
	<script src="js/home.js"></script>
</body>

</html>