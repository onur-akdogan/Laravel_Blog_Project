




<?php
use Illuminate\Support\Facades\DB;
$settings = DB::table('settings')->select('siteName', 'slogan', 'anahtarkelime', 'aciklama', 'mail', 'telefon', 'fax', 'adres', 'hakkimizda', 'facebook', 'twitter', 'youtube', 'instagram')
    ->where('id', '=', 1)->get();

foreach ($kategoriUrunler as $urun){
    $uruns=DB::table('urunler_tabel')->where('kategoriId','=',$urun->id)->get();
}
?>

@extends('layouts.front')


@foreach($settings as $setting)
@section('title')Ana Sayfa @endsection
@section('description'){{$setting->aciklama}}@endsection
@section('keywords'){{$setting->anahtarkelime}}@endsection
@section('author'){{$setting->siteName}}@endsection
@endforeach



@section('content')
    <div class="container-fluid" style="max-width: 1224px">
        <div class="row">

            <div class="col-lg-12" style="padding: 0px">



                <div class="col-lg-12">
                    <div class="row">
                        @foreach($uruns as $urun)
                            <br>
                            <div class="col-lg-4">
                                <div class="card" >
                                    <img class="card-img-top" height="200px"
                                         src="{{asset('images/'.$urun->urunFotoUrl)}}" alt="Card image cap">
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



            </div>
        </div>
    </div>


@endsection

