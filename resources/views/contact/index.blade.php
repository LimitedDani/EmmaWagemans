@extends('welcome')

@section('title')

Contact |

@endsection

@section('content')

<div class="container">
    @include ('layouts.errors')
<div class="row justify-content-md-center">
<div class="col col-lg-5">

<form action="/contact" method="POST">


    {{ csrf_field() }}

    <div class="form-group">
    <label for="title">Naam:</label>
    <input type="text" class="form-control" id="name" name="name" >
    </div>

    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" >
    </div>

    <div class="form-group">
    <label for="text">Bericht:</label>
    <textarea class="form-control" id="text" name="text" ></textarea>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">Verstuur</button>
    </div>

</form>
</div>
</div>
</div>

@endsection