@extends('layouts.app') 

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Berichten</div>
				<div class="panel-body">

					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif

					<div class="list-group">
						
						@foreach ($contacts as $contact)
						<li class="list-group-item">
							<div class="d-flex w-100 justify-content-between">
								<small class="text-muted"><strong>Datum: </strong>{{ $contact->created_at->toFormattedDateString() }}</small>
								<h5 class="mb-1"><strong>Afzender:</strong> {{ $contact->name }}</h5>
								<h5 class="mb-1"><strong>Email:</strong> {{ $contact->email }}</h5>
								<hr>
								<p class="mb-1">{{ $contact->text }}</p>
								<hr>																					
								
								<form method="post" action="/berichten/{{ $contact->id }}">
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<a href="mailto:{{ $contact->email }}?SUBJECT=Re:"><button type="button" class="btn btn-primary btn-sm">Reply</button></a>
									<button type="submit" class="btn btn-danger btn-sm">Delete</button>
								</form>									

							</div>
						</li>						
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection