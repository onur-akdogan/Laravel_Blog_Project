@extends('layouts.admin')
@section('title')
    Slider Ekle
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
    <h6 class="heading-small text-muted mb-4">Yeni Slider Oluştur</h6>



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

                        <button type="submit" class="btn btn-success">Upload</button>

                    </div>
                    <div class="col-lg-2">

                        @if(Session::get('image')!="")
                            <img src="{{asset('images/'.Session::get('image'))}}" height="100px">
                        @endif
                    </div>


                </div>


            </div>

        </form>
    </div>


    <div class="card-body">
        <form method="POST" action="">
            @csrf

            <div class="pl-lg-12">
                <div class="row">



                    <input name="sliderFotoUrl" type="hidden" value="{{Session::get('image')}}">


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="silderName">Başlık</label>
                            <input type="text" id="silderName" name="silderName"

                                   class="form-control form-control-alternative" placeholder="Başlık">
                        </div>
                    </div>




                </div>
            </div>
            <button class="btn btn-success float-right" id="user-update"><i class="fas fa-save"> EKLE</i></button>

        </form>
    </div>

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
