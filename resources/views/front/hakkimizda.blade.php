<?php
$settings = DB::table('settings')->select('siteName', 'slogan', 'anahtarkelime', 'aciklama', 'mail', 'telefon', 'fax', 'adres', 'hakkimizda', 'facebook', 'twitter', 'youtube', 'instagram')
    ->where('id', '=', 1)->get();

?>
@extends('layouts.front')

@section('title')
    Tüm Ürünler
@endsection



@section('content')



@foreach($settings as $setting)

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4" style="padding-top: 100px">
                @foreach($settings as $setting)
                    <h1>      {{$setting->siteName}}</h1>
                @endforeach
            </div>
            <div class="col-lg-8" >
                <h4 class="alert-heading">Hakkımızda</h4>
                <hr>
                <p class="mb-0"> {{$setting->hakkimizda}}</p>
            </div>

        </div>
    </div>





@endforeach





@endsection
@section('js')

@endsection
