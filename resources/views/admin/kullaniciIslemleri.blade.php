@extends('layouts.admin')
@section('title')
    Tüm Kullanıcılar
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
                                <h3 class="mb-0">Tüm Kullanıcılar</h3>
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
                                <th scope="col">Kullanıcı ID</th>


                                <th scope="col">Kullanıcı İsim</th>
                                <th scope="col">Kullanıcı Mail</th>


                                <th scope="col">Düzenle</th>
                                <th scope="col">Sil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listUsers as $Users)

                                <tr>
                                    <th scope="row">
                                        {{$Users->id}}
                                    </th>

                                    <td>
                                        {{$Users->name}}

                                    </td>
                                    <td>
                                        {{$Users->email}}
                                    </td>


                                    <td>
                                        <a href="{{route('kullaniciUpdate',$Users->id)}}" class=""><i
                                                class="ni ni-settings-gear-65 text-green ni-2x"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{route('kullanicisil',$Users->id)}}" class=""><i
                                                class="ni ni-fat-remove text-red ni-3x"></i></a>

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



