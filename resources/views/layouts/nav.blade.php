@if (Route::has('login'))
<a href="/contact">Contact</a> @auth
<a href="{{ url('/home') }}">Home</a> @else
<a href="{{ route('login') }}">Login</a>
<a href="{{ route('register') }}">Register</a> 
@endauth 
@endif


<ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
