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
                                        <label class="custom-file-label" name="urunFotoUrl" for="urunFotoUrl">Kapak Resmi
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
                                @elseif($secilidegerler->urunFotoUrl!="")
                                    <img src="{{asset('images/'.$secilidegerler->urunFotoUrl)}}" height="100px">

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



                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="kategori">Kategori</label>
                                <select class="form-control form-control-sm" name="kategori">
                                    @foreach($listkategori as $secilidegerler2)
                                        <option
                                                 value="{{$secilidegerler2->id}}">
                                            {{$secilidegerler2->kategoriIsım}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if(Session::get('image')!="")
                            <input name="urunFotoUrl" type="hidden" value="{{Session::get('image')}}">
                        @elseif($secilidegerler->urunFotoUrl!="")
                            <input name="urunFotoUrl" type="hidden" value="{{$secilidegerler->urunFotoUrl}}">

                        @endif


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="videoId">Video Id</label>
                                <input type="text" id="videoId" name="videoId" value="{{$secilidegerler->videoId}}"

                                       class="form-control form-control-alternative"
                                       placeholder="Youtube Video Id Giriniz">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="name">Başlık</label>
                                <input type="text" id="title" name="title" value="{{$secilidegerler->urunIsim}}"

                                       class="form-control form-control-alternative" placeholder="Başlık">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="subtitle">Alt Başlık</label>
                                <input type="text" id="subtitle" name="subtitle"
                                       value="{{$secilidegerler->urunAltBaslik}}"
                                       class="form-control form-control-alternative" placeholder="Alt Başlık">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="content">{{$secilidegerler->urunIcerik}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="name">Anahtar kelimeler</label>
                                <input type="text" id="keywords" name="keywords"
                                       value="{{$secilidegerler->urunanahtarkelime}}"

                                       class="form-control form-control-alternative" placeholder="Anahtar kelimelerlık">
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="description">Haber Açıklama</label>
                                <input type="text" id="description" name="description"
                                       value="{{$secilidegerler->urunAciklama}}"
                                       class="form-control form-control-alternative" placeholder="Alt Başlık">
                            </div>
                        </div>


                    </div>
                </div>
                <button link="{{route('urunguncelle',$secilidegerler->id)}}" class="btn btn-success float-right" id="user-update"><i class="fas fa-save"> Güncelle</i>
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
