
@foreach($listmessage as $mesajs)
    <script>
        Swal.fire(
            '{{$mesajs ->id}}',
            'You clicked the button!',
            'success'
        )
    </script>
@endforeach


@extends('layouts.admin')
@section('title')
    Mesajlar
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
                                <h3 class="mb-0">Tüm Mesajlar</h3>
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
                                <th scope="col">Mesaj Id</th>
                                <th scope="col">Mesaj Başlık</th>
                                <th scope="col">Mesaj Konu</th>
                                <th scope="col">Gönderen İsim</th>
                                <th scope="col">Gönderen Mail</th>
                                <th scope="col">Tarih</th>
                                <th scope="col">Sil</th>
                                <th scope="col">İçerik</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listmessage as $messages)
                                <tr>
                                    <th scope="row">
                                        {{ $messages->id}}
                                    </th>


                                    <td>
                                        {{ $messages->mesajName}}
                                    </td>

                                    <td>
                                        {{$messages->mesajKonu}}
                                    </td>
                                    <td>
                                        {{$messages->gonderenisim}}
                                    </td>
                                    <td>
                                        {{$messages->gonderenmail}}
                                    </td>
                                    <td>
                                        {{ $messages->created_at}}

                                    </td>

                                    <td>
                                        <a href="{{route('mesajsil',$messages->id)}}" class=""><i
                                                class="ni ni-fat-remove text-red ni-3x"></i></a>

                                    </td>
                                    <td4>
                                        {{$messages->mesajContent}}























                                    </td4>

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

