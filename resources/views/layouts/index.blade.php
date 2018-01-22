@extends('welcome') 

@section('assets')

<link rel="stylesheet" href="css/home.css">

@endsection

@section('content')

<video autoplay loop muted id="myVideo">
  <source src="uploads/video/video.mp4" type="video/mp4">
  <source src="uploads/video/video.webm" type="video/webm">
</video>

<div id="flex-container">
	<div id="flex-item">
		<p>Emma Wagemans</p>
		<div id="undertext"><i>make-up artist</i></div>
	</div>
</div>

<div class="content">
	<div class="binnen">
		<a id="myBtn" onclick="myFunction()"><img src="home_img/pause-button.svg" alt="Pause"></a>
		<a id="myBtn2" onclick="myFunction2()"><img src="home_img/mute-button.svg" alt="Mute"></a>
	</div>
</div>

</body>
</html>
@endsection