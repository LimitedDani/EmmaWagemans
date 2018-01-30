@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tarieven</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @include ('layouts.errors')
                    <form action="/edit/tarieven/{{$tarieven->id}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="text">Titel</label>
                            <input type="text" class="form-control" id="title" value="{{$tarieven->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Sub Titel</label>
                            <input type="subtitle" class="form-control" id="subtitle" value="{{$tarieven->subtitle}}" name="subtitle">
                        </div>
                        <div class="form-group">
                            <label for="price">Prijs</label>
                            <input type="text" class="form-control" id="price" value="{{$tarieven->price}}" name="price">
                        </div>
                        <div class="form-group">
                            <label for="photo">Afbeelding</label>
                            <img src="{{ URL::to('/') }}/images/{{$tarieven->photo}}" alt=""/>
                            <input type="file" class="custom-file-input" id="photo" name="photo">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" value="{{$tarieven->link}}" name="link">
                        </div>
                        <div class="form-group">
                            <label for="extra_info">Extra</label>
                            <input type="text" class="form-control" id="extra_info" value="{{$tarieven->extra_info}}" name="extra_info">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Wijzig</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection