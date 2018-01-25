<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') EmmaWagemans</title>	
	<link rel="stylesheet" href="css/home.css">
</head>

<body>
	<div class="flex-center position-ref full-height">
	@include('layouts.nav') 
	@yield('content')
	</div>
</body>
</html>