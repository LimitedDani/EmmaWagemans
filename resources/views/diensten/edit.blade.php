@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Dienst</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @include ('layouts.errors')
                    <form action="/edit/diensten/{{$diensten->id}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="text">Titel</label>
                            <input type="text" class="form-control" id="title" value="{{$diensten->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea class="form-control" id="text" rows="4" name="text">{{$diensten->text}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Afbeelding</label>
                            <img src="{{ URL::to('/') }}/images/{{$diensten->photo}}" alt=""/>
                            <input type="file" class="custom-file-input" id="photo" name="photo">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" value="{{$diensten->link}}" name="link">
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