@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Index</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @include ('layouts.errors')
                    @foreach ($indices as $index)
                    <form action="/edit/index/" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="text">Titel</label>
                            <input type="text" class="form-control" id="title" value="{{$index->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Sub Titel</label>
                            <input type="subtitle" class="form-control" id="subtitle" value="{{$index->subtitle}}" name="subtitle">
                        </div>                        
                        <div class="form-group">
                            <label for="video">Video - {{$index->video2}}</label>
                            <input type="file" class="custom-file-input" id="video" name="video1">
                        </div>
                        <div class="form-group">
                            <label for="video2">webm/gif - {{$index->video1}}</label>
                            <input type="file" class="custom-file-input" id="video2" name="video2">
                        </div>                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Wijzig</button>
                        </div>
                    </form>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection