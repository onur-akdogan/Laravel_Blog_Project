@extends('layouts.admin')
@section('title')
    Ana Sayfa
@endsection
@section('content')
    <?php
    $aktifUrun= DB::table('urunler_tabel')->where('status','=',1)->get();
    $aktifUrunSayisi=count($aktifUrun);
    $kullanıcı= DB::table('users')->get();
    $kullanıcıSayisi=count($kullanıcı);

    $aktifkategori= DB::table('kategori')->where('status','=',1)->get();
    $aktifkategoriSayisi=count($aktifkategori);

    $mesajlar= DB::table('message')->get();
    $mesajsayisi=count($mesajlar);
    ?>

    <div class="main-content">


        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Aktif Ürün Sayısı</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$aktifUrunSayisi}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-chart-bar"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Kullanıcı Sayısı</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$kullanıcıSayisi}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Aktif Kategori Sayısı</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$aktifkategoriSayisi}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                <i class="fas fa-compass"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Mesaj Sayısı</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$mesajsayisi}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                <i class="fas fa-mail-bulk"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
