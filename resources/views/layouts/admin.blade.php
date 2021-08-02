<?php

$settings = DB::table('settings')->select('siteName','slogan','anahtarkelime','aciklama', 'mail','telefon','fax', 'adres','hakkimizda','facebook', 'twitter','youtube','instagram')

    ->where('id', '=', 1)->get();

$aktifUrun= DB::table('urunler_tabel')->select('urunIsim')->where('status','=',1)->get();
$aktifUrunSayisi=count($aktifUrun);

?>
@foreach($settings as $setting)
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>

    <!-- Favicon -->
    <link href="{{asset('assets/img/brand/favicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="{{asset('/assets/css/sweetalert2.min.css')}}" rel="stylesheet"/>

    <link href="{{asset('/assets/css/argon-dashboard.css?v=1.1.2}')}}" rel="stylesheet"/>

</head>
<body>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand " href="{{route('AdminIndex')}}">

            <img src="{{asset('assets/img/brand/blue.png')}}"style="min-width: 200px;min-height: 100px;" >
        </a>

        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
                     aria-labelledby="navbar-default_dropdown_1">
                    <a href="{{route('userProfile')}}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Profilim</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{route('logout')}}" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Çıkış Yap</span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                {{auth()->user()->name}}
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0"></h6>
                    </div>
                    <a href="{{route('userProfile')}}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Profilim</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{route('logout')}}" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Çıkış Yap</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="./index.html">
                            <img src="{{asset('assets/img/brand/blue.png')}}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  active ">
                    <a class="nav-link  active " href="{{route('AdminIndex')}}">
                        <i class="ni ni-tv-2 text-primary"></i> Ana Sayfa
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{route('userProfile')}}">
                        <i class="ni ni-single-02 text-primary"></i> Profil
                    </a>
                </li>


                <li>
                    <p>
                        <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample1" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample1">
                            <i class="fa fa-apple-alt text-primary"></i> Ürün İşlemleri
                        </a>

                    </p>
                    <div class="collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('urunler')}}">
                                        <i class="ni ni-world text-primary"></i> Ürünler
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('urunEkleGit')}}">
                                        <i class="ni ni-paper-diploma text-primary"></i> Ürün Ekle
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('kategoriIslemleri')}}">
                        <i class="ni ni-compass-04 text-primary"></i> Kategori İşlemleri
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('mesajlaragit')}}">
                        <i class="ni ni-send text-primary"></i> Mesajlar
                    </a>
                </li>

                <li>
                    <p>
                        <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample2" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample2">
                            <i class="fa fa-file-image text-primary"></i> Slider İşlemleri

                        </a>

                    </p>
                    <div class="collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('sliderlar')}}">
                                        <i class="fa fa-images text-primary"></i> Sliderlar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('sliderEkle')}}">
                                        <i class="fa fa-image text-primary"></i> Slider Ekle
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>



                <li>
                    <p>
                        <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample5" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample5">
                            <i class="fab fa-blogger-b text-primary"></i> Blog İşlemleri

                        </a>

                    </p>
                    <div class="collapse" id="multiCollapseExample5">
                        <div class="card card-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('bloglar')}}">
                                        <i class="fa fa-list text-primary"></i> Bloglar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('blogEkle')}}">
                                        <i class="fa fa-save text-primary"></i> Blog Ekle
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <p>
                        <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample6" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample6">
                            <i class="fa fa-city text-primary"></i> Bizi Tercih Eden Firmalar
                        </a>

                    </p>
                    <div class="collapse" id="multiCollapseExample6">
                        <div class="card card-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('kullanicilar')}}">
                                        <i class="fa fa-user-circle text-primary"></i> Firmalar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('firmaIslemleri')}}">
                                        <i class="fa fa-user-edit text-primary"></i> Firma Ekle
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>



                <li>
                    <p>
                        <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample3" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample3">
                            <i class="fa fa-user text-primary"></i> Kullanıcı İşlemleri
                        </a>

                    </p>
                    <div class="collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('kullanicilar')}}">
                                        <i class="fa fa-user-circle text-primary"></i> Kullanıcılar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('kullaniciEkle')}}">
                                        <i class="fa fa-user-edit text-primary"></i> Kullanıcı Ekle
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('settings')}}">
                        <i class="ni ni-settings-gear-65 text-primary"></i> Ayarlar
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link " href="{{route('clearCache')}}">
                        <i class="fa fa-broom text-primary"></i> Ön Bellek Temizle
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{route('AdminIndex')}}">
                {{ $setting->siteName}}</a>

            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <div class="media align-items-center">

                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name}}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Merhaba!</h6>
                        </div>
                        <a href="{{route('userProfile')}}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Profilim
                            </span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="{{route('logout')}}" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Çıkış Yap</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <!--   Core   -->
    <script src="{{asset("assets/js/plugins/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <!--   Optional JS   -->
    <script src="{{asset("assets/js/plugins/chart.js/dist/Chart.min.js")}}"></script>
    <script src="{{asset("assets/js/plugins/chart.js/dist/Chart.extension.js")}}"></script>
    <!--   Argon JS   -->
    <script src="{{asset("assets/js/argon-dashboard.min.js?v=1.1.2")}}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src="{{asset("assets/js/sweetalert2.js")}}"></script>


@yield('js')
@include('sweetalert::alert')


</body>

</html>


@endforeach
