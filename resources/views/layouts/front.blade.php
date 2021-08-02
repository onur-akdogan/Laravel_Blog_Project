<?php
$settings = DB::table('settings')->select('siteName', 'slogan', 'anahtarkelime', 'aciklama', 'mail', 'telefon', 'fax', 'adres', 'hakkimizda', 'facebook', 'twitter', 'youtube', 'instagram')
    ->where('id', '=', 1)->get();
$kategoriler = DB::table('kategori')->where('status','=',1)->get();

?>
@foreach($settings as $setting)
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <title>
        @yield('title')
    </title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/all.css" rel="stylesheet"/>
    <script defer src="assets/js/all.js"></script>
</head>
<body>




<div class="container" style="max-width: 1148px">

    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
        <a class="navbar-brand" href="{{route('index')}}">{{$setting->siteName}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('index')}}">Anasayfa </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('Tumurunler')}}">Ürünler </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('tumBloglar')}}">Bloglar </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategoriler
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($kategoriler as $kategori)
                            <a class="dropdown-item"
                               href="{{route('kategori',$kategori->id)}}">{{$kategori->kategoriIsım}}</a>


                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('hakkimizda')}}">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('iletisim')}}">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('regex')}}">regex</a>
                </li>
            </ul>

        </div>
    </nav>

    @yield('content')


</div>



@yield('js')
@include('sweetalert::alert')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>



<div class="footerm" style="   width: 100%;
    bottom:0">
    <footer class="bg-light text-center text-dark">
        <!-- Grid container -->
        <div class="container p-4">

            <section class="mb-4">
                <p>
                    {{$setting->slogan}}
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-8 mb-md-0">
                        <h5 class="text-uppercase">    {{$setting->siteName}} Hakkında</h5>

                        <ul class="list-unstyled mb-0">


                                {{$setting->aciklama}}



                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-12 mb-8 mb-md-0">
                        <h5 class="text-uppercase">Sosyal Medya Hesaplarımız</h5>

                        <p class="list-unstyled mb-0">

                                <a href="https://{{$setting->facebook}}" class="text-dark"  style="margin: 10px"> <i class="fab fa-facebook-square fa-2x "></i></a>

                                <a href="https://{{$setting->twitter}}" class="text-dark"style="margin: 10px"><i class="fab fa-twitter fa-2x"></i></a>

                                <a href="https://{{$setting->instagram}}" class="text-dark"style="margin: 10px"><i class="fab fa-instagram fa-2x"></i></a>

                                <a href="https://{{$setting->youtube}}" class="text-dark"style="margin: 10px">
                                    <i class="fab fa-youtube fa-2x"></i>
                            </a>


                        </p>
                    </div>

                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-danger" href="https://yahsisoft.com/">Yahşi Soft
            </a>
        </div>
    </footer>
</div>

<!-- Footer -->

</body>


</html>
@endforeach















