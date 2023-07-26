@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>DC COMICS</h2>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($comics as $comic)
                <div class="col-12 col-md-6 col-lg-3">
                    <a class="text-decoration-none" href="{{route('comic.show',$comic->id)}}">
                        <div class="card my-3">
                            <div class="card-img-top">
                                <img class="img-fluid "src="{{$comic->thumb}}" >
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h4>{{$comic->title}}</h4>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection