@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Portfolio item</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @include ('layouts.errors')
                    <form action="/edit/portfolio/{{$portfolio->id}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="text">Titel</label>
                            <input type="text" class="form-control" id="title" value="{{$portfolio->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Sub Titel</label>
                            <input type="subtitle" class="form-control" id="subtitle" value="{{$portfolio->subtitle}}" name="subtitle">
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea class="form-control" id="text" rows="4" name="text">{{$portfolio->text}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Afbeelding - {{$portfolio->photo1}}</label>
                            <input type="file" class="custom-file-input" id="photo" name="photo1">
                        </div>
                        <div class="form-group">
                            <label for="photo2">Afbeelding 2 - {{$portfolio->photo2}}</label>
                            <input type="file" class="custom-file-input" id="photo2" name="photo2">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" value="{{$portfolio->link}}" name="link">
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