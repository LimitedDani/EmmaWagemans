@if (Route::has('login'))
<div class="top-right links">
<a href="/diensten">Diensten</a>
<a href="/tarieven">Tarieven</a>
<a href="/portfolio">Portfolio</a>
<a href="/contact">Contact</a>
@auth
<a href="{{ url('/home') }}">Home</a> 
@else
<a href="{{ route('login') }}">Login</a>
<a href="{{ route('register') }}">Register</a> 
@endauth
</div> 
@endif

