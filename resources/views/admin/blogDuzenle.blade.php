@extends('layouts.admin')
@section('title')
    Düzenle
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

    @foreach($list as $secilidegerler)
        <div class="container">


            <div class="card-body">
                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-12">
                        <div class="row">


                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label class="form-control-label" for="coverphoto">Kapak Resmi</label>
                                        <input type="file" name="image" class="custom-file-input" id="image"
                                               lang="tr">
                                        <label class="custom-file-label" name="fotoUrl" for="urunFotoUrl">Kapak Resmi
                                            Seç</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">

                                <button type="submit" class="btn btn-success">Güncelle</button>

                            </div>
                            <div class="col-lg-2">

                                @if(Session::get('image')!="")
                                    <img src="{{asset('images/'.Session::get('image'))}}" height="100px">
                                @elseif($secilidegerler->fotoUrl!="")
                                    <img src="{{asset('images/'.$secilidegerler->fotoUrl)}}" height="100px">

                                @endif
                            </div>


                        </div>


                    </div>

                </form>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="">
                @csrf
                <h6 class="heading-small text-muted mb-4">Güncelle</h6>
                <div class="pl-lg-12">
                    <div class="row">



                        @if(Session::get('image')!="")
                            <input name="fotoUrl" type="hidden" value="{{Session::get('image')}}">
                        @elseif($secilidegerler->fotoUrl!="")
                            <input name="fotoUrl" type="hidden" value="{{$secilidegerler->fotoUrl}}">

                        @endif




                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="name">Başlık</label>
                                <input type="text" id="baslik" name="baslik" value="{{$secilidegerler->baslik}}"

                                       class="form-control form-control-alternative" placeholder="Başlık">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="altbaslik">Alt Başlık</label>
                                <input type="text" id="altbaslik" name="altbaslik"
                                       value="{{$secilidegerler->altbaslik}}"
                                       class="form-control form-control-alternative" placeholder="Alt Başlık">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="icerik">{{$secilidegerler->icerik}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="anahtarKelime">Anahtar kelimeler</label>
                                <input type="text" id="anahtarKelime" name="anahtarKelime"
                                       value="{{$secilidegerler->anahtarKelime}}"

                                       class="form-control form-control-alternative" placeholder="Anahtar kelimelerlık">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="aciklama">Açıklama</label>
                                <input type="text" id="aciklama" name="aciklama"
                                       value="{{$secilidegerler->aciklama}}"
                                       class="form-control form-control-alternative" placeholder="aciklama">
                            </div>
                        </div>


                    </div>
                </div>
                <button link="{{route('blogDuzenleSayfasi',$secilidegerler->id)}}" class="btn btn-success float-right" id="user-update"><i class="fas fa-save"> Güncelle</i>
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
        CKEDITOR.replace('icerik');
    </script>
@endsection
