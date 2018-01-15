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

                    @foreach ($contact as $contact)

                    <li class="list-group-item">
                    
                        {{ $contact->text }}

                    </li>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
