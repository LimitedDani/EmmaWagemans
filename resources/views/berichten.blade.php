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

                    <a href="mailto:{{ $contact->email }}?SUBJECT=Re:" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $contact->email }}</h5>
                            <small>{{ $contact->created_at->diffForHumans() }}</small>
                        </div>
                            <p class="mb-1">{{ $contact->text }}</p>
                    </a>

                    @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
