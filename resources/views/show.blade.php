@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row my-5">
        <div class="col-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="{{$comic->thumb}}" >
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <h2>{{$comic->title}}</h2>
            <p>Prezzo:{{$comic->price}}</p>
            <p>Serie:{{$comic->series}}</p>
            <p>Data di uscita:{{$comic->sale_date}}</p>
        </div>
           
        <div class="row">
            <div class="col-12">
                <p>{{$comic->description}}</p>
            </div>
            <div class="col-12 col-md-6">
                Autori:{{$comic->writers}}
              
            </div>
            <div class="col-12 col-md-6">
                Autori:{{$comic->artists}}
               
            </div>
        </div>

    </div>
   </div>
@endsection