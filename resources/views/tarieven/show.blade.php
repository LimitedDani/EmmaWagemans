@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tarief</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <ul class="list-group">
                            @foreach ($tarievens as $tarieven)
                            <a href="/edit/tarieven/{{$tarieven->id}}/show" class="list-group-item list-group-item-action">{{$tarieven->title}}</a>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection