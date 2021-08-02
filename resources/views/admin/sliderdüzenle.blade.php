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
    @foreach($editslider as $sliderEdit)

        <div class="card-body">
            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="col-lg-12">
                    <div class="row">


                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="custom-file">
                                    <label class="form-control-label" for="coverphoto">Kapak Resmi</label>
                                    <input type="file" name="image" class="custom-file-input" id="image"
                                           @if(Session::get('image')=='')
                                    {{$foto= $sliderEdit->sliderFotoUrl}}
                                    @else
                                    {{$foto= Session::get('image')}}
                                    @endif
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


                            <img src="{{asset('images/'.$foto)}}" height="100px">

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


                          <input name="sliderFotoUrl" type="hidden"
                                 value="{{$foto}}">


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="silderName">Başlık</label>
                                <input type="text" id="silderName" name="silderName"
                                       value="{{$sliderEdit->silderName}}"
                                       class="form-control form-control-alternative" placeholder="Başlık">
                            </div>
                        </div>


                    </div>
                </div>
                <button class="btn btn-success float-right" id="user-update"><i class="fas fa-save"> Güncelle</i>
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
