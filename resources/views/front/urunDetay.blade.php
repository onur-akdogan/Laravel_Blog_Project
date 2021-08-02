@extends('layouts.front')

@foreach($secilenUrun as $urun)
@section('title')  Kategoriler @endsection
@section('description'){{$urun->urunAciklama}}@endsection
@section('keywords'){{$urun->urunanahtarkelime}}@endsection

@endforeach
<?php
$urunler=DB::table('urunler_tabel')->limit(5)->get();
?>







@section('content')


    @foreach($secilenUrun as $urun)


            <div class="row">
                <div class="col-lg-3"style="padding-top:50px ">
                    <div class="card" >
                        <div class="card-header">
                            Diğer Ürünlerimiz
                        </div>
                        <a class="list-group list-group-flush">
                            @foreach($urunler as $urunOku)

                                    <a href="{{route('urunDetay',$urunOku->id)}}" style="color: black"><li class="list-group-item">{{$urunOku->urunIsim}}</li></a>

                                    @endforeach
                                    </ul>
                    </div>

                </div>
                <div class="col-lg-9">
                    @if($urun->videoId!="")
                        <iframe width="100%" height="480" src="https://www.youtube.com/embed/{{$urun->videoId}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                    @else
                    <img class="card-img-top" width="100%" src="{{asset('images/'.$urun->urunFotoUrl)}}"
                         alt="kapak foto">
                    @endif
                </div>

            </div>

        <center><h1 style="font-weight: bold">{{$urun->urunIsim}}</h1></center>
        <h4>{{$urun->urunAltBaslik}}</h4>
        <?php
        $urunaciklamasi = $urun->urunIcerik;
        ?>


          <?php
          echo $urunaciklamasi;
          ?>

    @endforeach


@endsection
@section('js')

@endsection
