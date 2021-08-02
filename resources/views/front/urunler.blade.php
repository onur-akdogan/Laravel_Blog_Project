@extends('layouts.front')

@section('title')
    Tüm Ürünler
@endsection



@section('content')

    <div class="col-lg-12">
        <div class="row">
            @foreach($urunler as $urun)
                <br>
                <div class="col-lg-4">
                    <div class="card" >
                        <img class="card-img-top"  height="200px" src="{{asset('images/'.$urun->urunFotoUrl)}}" alt="Card image cap">
                        <div class="card-body bg-light">
                            <h5 class="card-title">{{$urun->urunIsim}}</h5>


                            <a href="{{route('urunDetay',$urun->id)}}" class="btn btn-danger" style="width: 100%">İncele </a>

                        </div>
                    </div>

                    <br>
                </div>

            @endforeach
        </div>
    </div>











@endsection
@section('js')

@endsection
