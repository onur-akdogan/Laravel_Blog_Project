@extends('layouts.admin')
@section('title')
    Tüm Ürünler
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


    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Tüm Ürünler</h3>
                            </div>
                            <div class="col text-right">

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Urun Id</th>
                                <th scope="col">Urun Foto</th>


                                <th scope="col">Urun Başlık</th>
                                <th scope="col">Tarih</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Durum</th>
                                <th scope="col">Öne Çıkar</th>
                                <th scope="col">Düzenle</th>
                                <th scope="col">Sil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listUrun as $urunler)

                            <tr>
                                <th scope="row">
                                    {{$urunler->id}}
                                </th>

                                <td>
                                    @if($urunler->urunFotoUrl!="")
                                        <img src="{{asset('images/'.$urunler->urunFotoUrl)}}" height="50px">

                                    @endif

                                </td>
                                <td>
                                    {{$urunler->urunIsim}}
                                </td>
                                <td>
                                    {{$urunler->created_at}}

                                </td>
                                <td>

                                  {{$urunler->kategoriIsım}}
                                </td>
                                <td>
                                    <?php
                                    $durum = $urunler->status;
                                    if ($durum == 0){
                                    ?>
                                        <a href="{{route('statusChangeUrun',[$urunler->id,$durum=1])}}" class="btn btn-danger btn-sm">PASİF</a>


                                    <?php
                                    } elseif ($durum == 1){
                                    ?>


                                        <a href="{{route('statusChangeUrun',[$urunler->id,$durum=0])}}" class="btn btn-success btn-sm">AKTİF</a>
                                    <?php
                                    }
                                    ?>
                                </td>





                                <td>
                                    <?php
                                    $onecikar = $urunler->onecikar;
                                    if ($onecikar == 0){
                                    ?>
                                    <a href="{{route('onecikar',[$urunler->id,$onecikar=1])}}" class="btn btn-danger btn-sm">PASİF</a>


                                    <?php
                                    } elseif ($onecikar == 1){
                                    ?>


                                    <a href="{{route('onecikar',[$urunler->id,$onecikar=0])}}" class="btn btn-success btn-sm">AKTİF</a>
                                    <?php
                                    }
                                    ?>







                                </td>








                                <td>
                                       <a href="{{route('urunDuzenle',$urunler->id)}}" class=""><i class="ni ni-settings-gear-65 text-green ni-2x"></i></a>
                                </td>
                                <td>
                                    <a href="{{route('urunsil',$urunler->id)}}" class=""><i class="ni ni-fat-remove text-red ni-3x"></i></a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>
    </div>
    </div>

@endsection



