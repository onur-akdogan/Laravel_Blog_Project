@extends('layouts.admin')
@section('title')
    Kategori Ekle
@endsection
@section('content')


    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
         style="min-height: 60px;  background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card-body">
                        <form method="POST" action="{{route('kategoriAdd')}}">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Yeni Kategori Oluştur</h6>
                            <div class="pl-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">Kategori İsim</label>
                                            <input type="text" id="kategori" name="kategori" required

                                                   class="form-control form-control-alternative"
                                                   placeholder="Kategori İsim">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success float-right" id="user-update"><i class="fas fa-save">
                                    EKLE</i></button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="row md-5">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Kategoriler</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>

                            <th scope="col">Kategori Id</th>
                            <th scope="col">Kategori İsim</th>
                            <th scope="col">Durum</th>
                            <th scope="col">Oluşturulma Tarihi</th>
                            <th scope="col">Sil</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $items)
                            <tr>


                                <td>
                                    {{$items->id}}
                                </td>
                                <td>
                                    {{$items->kategoriIsım}}
                                </td>

                                <td>
                                    <?php
                                    $durum = $items->status;
                                    if ($durum == 0){
                                    ?>
                                    <a href="{{route('statusChangeKategori',[$items->id,$durum=1])}}" class="btn btn-danger btn-sm">PASİF</a>


                                    <?php
                                    } elseif ($durum == 1){
                                    ?>


                                    <a href="{{route('statusChangeKategori',[$items->id,$durum=0])}}" class="btn btn-success btn-sm">AKTİF</a>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                   {{\Carbon\Carbon::parse($items->created_at)->format('d.m.Y')}}

                                </td>
                                <td>
                                    <a href="{{route('kategoriSil',$items->id)}}" class=""><i class="ni ni-fat-remove text-red ni-3x"></i></a>


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

@endsection


@section('js')
@endsection
