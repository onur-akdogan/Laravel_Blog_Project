<?php
$settings = DB::table('settings')->select('siteName', 'slogan', 'anahtarkelime', 'aciklama', 'mail', 'telefon', 'fax', 'adres', 'hakkimizda', 'facebook', 'twitter', 'youtube', 'instagram')
    ->where('id', '=', 1)->get();

?>
@extends('layouts.front')

@section('title')
    İletişime Geç
@endsection



@section('content')



    @foreach($settings as $setting)

        <div class="row">
            <div class="col-lg-6">
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading">Adres</h4>
                    <hr>
                    <p class="mb-0"> {{$setting->adres}}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading">Telefon</h4>
                    <hr>
                    <p class="mb-0"> {{$setting->telefon}}
                    <i class="fa fa-phone-alt "></i> <a href="tel:{{$setting->telefon}}"
                                                                     style="color: black;font-size: 12px;font-weight: bold">Bize
                            Hemen Ulaşın</a></p>
                </div>
            </div>
        </div>
        <hr>
<h2>Mesaj Gönder</h2>

        <div class="col-lg-12" style="padding: 20px;margin: 20px">
    <form method="POST" action="">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">İsim</label>
                <input type="text" name="gonderenisim" class="form-control" id="gonderenisim">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">email</label>
                <input type="text" name="gonderenmail" class="form-control" id="inputPassword4" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Başlık</label>
            <input type="text" name="mesajName" class="form-control" id="inputAddress" >
        </div>
        <div class="form-group">
            <label for="inputAddress2">Konu</label>
            <input type="text" name="mesajKonu" class="form-control" id="inputAddress2" >
        </div>
        <div class="form-group">
            <label for="inputAddress2">Mesaj İçeriği</label>
            <textarea class="form-control " name="mesajContent" class="form-control" id="inputAddress2" ></textarea>
        </div>


        <button class="btn btn-primary">Gönder</button>

    </form>
</div>



    @endforeach





@endsection
@section('js')

@endsection
