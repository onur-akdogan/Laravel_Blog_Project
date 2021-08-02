@extends('layouts.front')

@section('title')
    Tüm Bloglar
@endsection



@section('content')

    <div class="col-lg-12">
        <div class="row">
            @foreach($bloglar as $blog)
                <br>
                <div class="col-lg-4">
                    <div class="card" >
                        <img class="card-img-top"  height="200px" src="{{asset('images/'.$blog->fotoUrl)}}" alt="Card image cap">
                        <div class="card-body bg-light">
                            <h5 class="card-title" style="text-align: center">{{$blog->baslik}}</h5>

                            <a href="{{route('blogDetay',$blog->id)}}" class="btn btn-danger" style="width: 100%">OKU </a>
                        </div>
                    </div>

                    <br>
                </div>

            @endforeach
        </div>
    </div>


@endsection




