@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="{{$comic->thumb}}" >
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <h2>{{$comic->title}}</h2>
        </div>

    </div>
   </div>
@endsection