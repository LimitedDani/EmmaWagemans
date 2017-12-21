@if (count($errors)) 
    <div class="alert alert-danger">
    <h4 class="alert-heading">Niet zo snel!</h4>
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach 
    </div>
@endif
	