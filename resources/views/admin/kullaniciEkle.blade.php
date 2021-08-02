@extends('layouts.admin')
@section('title')
    Kullanıcı Ekle
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
    <h6 class="heading-small text-muted mb-4">Yeni Kullanıcı Oluştur</h6>


    <div class="card-body">
        <form method="POST" action="">
            @csrf
            <div class="pl-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Kullanıcı İsmi</label>
                            <input type="text" id="name" name="name"

                                   class="form-control form-control-alternative"
                                   placeholder="Kullanıcı İsmi">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="email">Kullanıcı E-mail</label>
                            <input type="text" id="email" name="email"

                                   class="form-control form-control-alternative" placeholder="Kullanıcı E-mail">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="password">Kullanıcı Şifre</label>
                            <input type="text" id="password" name="password"
                                   class="form-control form-control-alternative" placeholder="Kullanıcı Şifre">
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


