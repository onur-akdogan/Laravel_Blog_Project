@extends('layouts.admin')
@section('title')
    Tüm Bloglar
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
                                <h3 class="mb-0">Tüm Bloglar</h3>
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
                                <th scope="col">Blog Id</th>
                                <th scope="col">Blog Foto</th>


                                <th scope="col">Blog Başlık</th>
                                <th scope="col">Blog Tarih</th>

                                <th scope="col">Düzenle</th>
                                <th scope="col">Sil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bloglar as $blog)

                                <tr>
                                    <th scope="row">
                                        {{$blog->id}}
                                    </th>

                                    <td>
                                        @if($blog->fotoUrl!="")
                                            <img src="{{asset('images/'.$blog->fotoUrl)}}" height="50px">

                                        @endif

                                    </td>
                                    <td>
                                        {{$blog->baslik}}
                                    </td>
                                    <td>
                                        {{$blog->created_at}}

                                    </td>


                                    <td>
                                        <a href="{{route('blogDuzenle',$blog->id)}}" class=""><i class="ni ni-settings-gear-65 text-green ni-2x"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{route('blogsil',$blog->id)}}" class=""><i class="ni ni-fat-remove text-red ni-3x"></i></a>

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



