@extends('layouts.admin')
@section('title')
    Ayarlar
@endsection
@section('content')


    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
         style="min-height: 60px;  background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-10 col-md-10">


                </div>
            </div>
        </div>
    </div>

    @foreach($settings as $secilidegerler)


        <div class="card-body">
            <form method="POST" action="">
                @csrf
                <h6 class="heading-small text-muted mb-4">Site Ayarları</h6>
                <div class="pl-lg-12">
                    <div class="row">


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="videoId">Site İsmi</label>
                                <input type="text" id="siteName" name="siteName" value="{{$secilidegerler->siteName}}"

                                       class="form-control form-control-alternative"
                                       placeholder="Site İsmi Giriniz">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="slogan">Slogan</label>
                                <input type="text" id="slogan" name="slogan" value="{{$secilidegerler->slogan}}"

                                       class="form-control form-control-alternative" placeholder="Slogan">
                            </div>
                        </div>   <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="slogan">Açıklama</label>
                                <input type="text" id="aciklama" name="aciklama" value="{{$secilidegerler->aciklama}}"

                                       class="form-control form-control-alternative" placeholder="aciklama">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="anahtarkelime">Anahtar kelimeler</label>
                                <input type="text" id="anahtarkelime" name="anahtarkelime"
                                       value="{{$secilidegerler->anahtarkelime}}"

                                       class="form-control form-control-alternative" placeholder="Anahtar kelimeler">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="mail">Mail</label>
                                <input type="text" id="mail" name="mail"
                                       value="{{$secilidegerler->mail}}"
                                       class="form-control form-control-alternative" placeholder="mail">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="telefon">Telefon</label>
                                <input type="text" id="telefon" name="telefon"
                                       value="{{$secilidegerler->telefon}}"

                                       class="form-control form-control-alternative" placeholder="Telefon">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="fax">Fax</label>
                                <input type="text" id="fax" name="fax"
                                       value="{{$secilidegerler->telefon}}"
                                       class="form-control form-control-alternative" placeholder="Fax">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="adres">Adres</label>
                                <input type="text" id="adres" name="adres" value="{{$secilidegerler->adres}}"

                                       class="form-control form-control-alternative"
                                       placeholder="Site İsmi Giriniz">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="hakkimizda">Hakkımızda</label>
                                <input type="text" id="hakkimizda" name="hakkimizda"
                                       value="{{$secilidegerler->hakkimizda}}"

                                       class="form-control form-control-alternative" placeholder="Hakkımızda">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="facebook">Facbook</label>
                                <input type="text" id="facebook" name="facebook"
                                       value="{{$secilidegerler->facebook}}"
                                       class="form-control form-control-alternative" placeholder="Facebook">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="twitter">Twitter</label>
                                <input type="text" id="twitter" name="twitter"
                                       value="{{$secilidegerler->twitter}}"

                                       class="form-control form-control-alternative" placeholder="Twitter">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="youtube">Youtube</label>
                                <input type="text" id="youtube" name="youtube"
                                       value="{{$secilidegerler->youtube}}"

                                       class="form-control form-control-alternative" placeholder="youtube">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="description">Instagram</label>
                                <input type="text" id="instagram" name="instagram"
                                       value="{{$secilidegerler->instagram}}"
                                       class="form-control form-control-alternative" placeholder="instagram">
                            </div>
                        </div>


                    </div>
                </div>
                <button link="" class="btn btn-success float-right" id="user-update"><i class="fas fa-save">
                        Güncelle</i>
                </button>

            </form>
        </div>
        @endforeach
        </div>










        </div>
        </div>

@endsection


@section('js')

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
