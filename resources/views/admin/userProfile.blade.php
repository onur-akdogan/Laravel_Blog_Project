@extends('layouts.admin')
@section('title')
    Kullanıcı İşlemleri
@endsection
@section('content')


    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
         style="min-height: 600px;  background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Merhaba {{auth()->user()->name}}</h1>
                    <p class="text-white mt-0 mb-5"> Aramıza Tekrar Hoş Geldin
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">HESABIM</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            @method('PUT')


                            <h6 class="heading-small text-muted mb-4">Kullanıcı işlemleri</h6>
                            <div class="pl-lg-4">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name">Kullanıcı adı</label>
                                        <input type="text" id="name" name="name"

                                               class="form-control form-control-alternative" placeholder="name" required
                                               value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email Adresi</label>
                                        <input type="email" id="email" name="email"required
                                               class="form-control form-control-alternative"
                                               value="{{$user->email}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Parola</label>
                                        <input type="text" id="password" name="password"
                                               class="form-control form-control-alternative"
                                               placeholder="Parola">
                                    </div>
                                </div>


                            </div>


                            <button class="btn btn-success float-right" id="user-update"><i class="fas fa-save"> GÜNCELLE</i>
                            </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


@endsection
@section('js')

    <script>
        $('#user-update').click(function ()
        {

            var username = $('#name').val();
            var email = $('#email').val();
            console.log(name);
            if (username.trim()=="") {

                Swal.fire({
                    icon: 'error',
                    title: 'HATA',
                    text: 'Lütfen İsminizi Giriniz!',
                  showConfirmButton:'TAMAM'
                })
            }
            else if (email.trim()==""){
                Swal.fire({
                    icon: 'error',
                    title: 'HATA',
                    text: 'Lütfen Email Giriniz!',
                    showConfirmButton:'TAMAM'

                })
            }
            else {
               $('#user-update-form').submit();
            }
        })


    </script>

@endsection
