@extends('layouts.front')

<?php
use Illuminate\Support\Arr;use Illuminate\Support\Str;use PHPHtmlParser\Dom;
$dom = new Dom;
$dom->loadFromUrl('https://www.mynet.com/havadurumu/asya/turkiye/kirikkale');
$html2 = $dom->outerHtml;

$gün = $html2 = $dom->find('<p class="hvPboxMiddle"')[20];
$resim = $html2 = $dom->find('<p class="hvPboxMiddle"')[22];
$durum = $html2 = $dom->find('<p class="hvPboxMiddle"')[24];
$derece = $html2 = $dom->find('<p class="hvPboxMiddle"')[27];





$dom = new Dom;
$dom->loadFromUrl('https://www.gazetekale.com/');
$htmlkur = $dom->outerHtml;


$dolar = $htmlkur = $dom->find('<div class="table-responsive">')[162];
$altin = $htmlkur = $dom->find('<div class="table-responsive">')[164];
$euro = $htmlkur = $dom->find('<div class="table-responsive">')[167];
$borsa = $htmlkur = $dom->find('<div class="table-responsive">')[170];

$dolarWidget=Str::replace('border-right','col',$dolar);
$altinWidget=Str::replace('border-right','col',$altin);
$euroWidget=Str::replace('border-right','col',$euro);
$borsaWidget=Str::replace('border-right','col',$borsa);


$dom = new Dom;
$dom->loadFromUrl('https://www.kirikkalehaber.net/index.php');
$htmlPuanTablosu = $dom->outerHtml;

$PuanTablosu= $htmlPuanTablosu  = $dom->find('<div class="col-md-4">')[316];




?>

@foreach($settings as $setting)
@section('title')Ana Sayfa @endsection
@section('description'){{$setting->aciklama}}@endsection
@section('keywords'){{$setting->anahtarkelime}}@endsection
@section('author'){{$setting->siteName}}@endsection
@endforeach
<style>
    .table-responsive{
        background-color: #d00c0c;
        color: white;!important;
    }.table-responsive th{

        color: white;!important;
    }.table-responsive td{

        color: white;!important;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('content')


    <div class="container-fluid" style="max-width: 1224px">
        <div class="row">

            <div class="col-lg-12" style="padding: 0px">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach( $slider as $sliders )
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                class="{{$loop->first ? 'active' : ''}}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" style="max-height: 600px">
                        @foreach( $slider as $sliders )

                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="resim">
                                    <img class="d-block img-fluid" style="max-height: 400px"
                                         src="{{asset('images/'.$sliders->sliderFotoUrl)}}"
                                         alt="{{ $sliders->sliderFotoUrl}}">
                                    <center>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 style="font-size: 28px;font-weight: bold">{{ $sliders->silderName}}</h5>

                                        </div>
                                    </center>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <center>
<!--                <div class="col-lg-12 visible-lg" style=" color: black;max-width:50%;position: center;">



                    <div class="row">
                        <div class="col-lg-3 col-md-3"><?php echo $dolarWidget;?></div>
                        <div class="col-lg-3 col-md-3"><?php echo $euroWidget;?></div>
                        <div class="col-lg-3 col-md-3"><?php echo $altinWidget;?></div>
                        <div class="col-lg-3 col-md-3"><?php echo $borsa;?></div>
                    </div>

                </div>
-->
            </center>





            <div class="col-lg-12"

                 style="background-color: white;min-height: 323px;min-width: 100%;position: static;bottom: 10px;padding-top: 100px ">

                <center><h2>Bizi Tercih Eden Bazı Firmalar</h2></center>

                <div class="row">

                    @foreach($firmalar as $firma)
                        <div class="col-lg-2">
                            <img class="d-block img-fluid" style="max-height: 400px"
                                 src="{{asset('images/'.$firma->fotoUrl)}}"
                                 alt="{{ $firma->fotoUrl}}">
                            <center>   {{ $firma->firmaName}}</center>

                        </div>

                    @endforeach
                </div>


            </div>


            <div class="col-lg-12"
                 style=" min-width: 100%;bottom: 10px;padding: 50px 0px ">





                <center><h2>Öne Çıkan Ürünler</h2></center>
                <div class="row">
                    @foreach($onecikanUrunler as $onecikanUrun)

                        <div class="col-md-4" style="padding-bottom: 20px">
                            <div class="card">
                                <img class="card-img-top" height="200px"
                                     src="{{asset('images/'.$onecikanUrun->urunFotoUrl)}}"
                                     alt="Card image cap">
                                <div class="card-body bg-light">
                                    <h5 class="card-title" style="text-align: center">{{$onecikanUrun->urunIsim}}</h5>

                                    <a href="{{route('urunDetay',$onecikanUrun->id)}}" class="btn btn-danger"
                                       style="width: 100%">İncele </a>
                                </div>
                            </div>
                        </div>


                    @endforeach


                </div>
            </div>
            @if($setting->telefon!="")



                <div class="col-lg-12" style=" color: white;background-color:#2e3e4e;min-width: 100%;position: static;">


                    <center><i class="fa fa-phone-alt fa-2x"></i> <a href="tel:{{$setting->telefon}}"
                                                                     style="color: white;font-size: 24px;font-weight: bold">Bize
                            Hemen Ulaşın</a></center>
                </div>



            @endif






            <div class="col-lg-12"
                 style=" min-width: 100%;bottom: 10px;padding: 20px 0px ">

                <center><h2>Son Bloglar</h2></center>



                <div class="row">
                    @foreach($bloglar as $blog)

                        <div class="col-md-3" style="padding-bottom: 20px">
                            <div class="card">
                                <img class="card-img-top" height="200px" src="{{asset('images/'.$blog->fotoUrl)}}"
                                     alt="Card image cap">
                                <div class="card-body bg-light">
                                    <h5 class="card-title" style="text-align: center">{{$blog->baslik}}</h5>

                                    <a href="{{route('blogDetay',$blog->id)}}" class="btn btn-danger"
                                       style="width: 100%">OKU </a>
                                </div>
                            </div>
                        </div>


                    @endforeach


                </div>
            </div>

        </div>


    </div>

    <div class="row">
        <div class="col-lg-6">
            <?php

            echo $gün;
            echo " ";
            echo $resim; echo " ";
            echo $derece; echo " ";
            echo $durum; echo " ";

            ?>
        </div>
        <div class="col-lg-6"><?php
            echo  $PuanTablosu ?></div></div>
@endsection


@section('js')


@endsection




