@extends('layouts.front')

@foreach($secilenblog as $blog)
@section('title')  Blog Detay @endsection
@section('description'){{$blog->aciklama}}@endsection
@section('keywords'){{$blog->anahtarKelime}}@endsection

@endforeach


<?php
    $bloglar=DB::table('blog')->limit(5)->get();
?>

@section('content')


 <div class="row">
     <div class="col-lg-3"style="padding-top:50px ">
         <div class="card" >
             <div class="card-header">
                 Diğer Yazılar
             </div>
             <a class="list-group list-group-flush">
                 @foreach($bloglar as $blog)
                     @if($bloglar!="")
                     <a href="{{route('blogDetay',$blog->id)}}" style="color: black"><li class="list-group-item">{{$blog->baslik}}</li></a>
                         @endif
                         @endforeach
             </ul>
         </div>

     </div>
     <div class="col-lg-9">   @foreach($secilenblog as $blog)


             <div class="row">
                 <div class="col-lg-1">
                 </div>
                 <div class="col-lg-10">
                     <img class="card-img-top" width="100%" src="{{asset('images/'.$blog->fotoUrl)}}"
                          alt="kapak foto">
                 </div>
                 <div class="col-lg-1">

                 </div>
             </div>

             <center><h1 style="font-weight: bold">{{$blog->baslik}}</h1></center>
             <h4>{{$blog->altbaslik}}</h4>
             <?php
             $blogaciklamasi = $blog->icerik;
             ?>


             <?php
             echo $blogaciklamasi;
             ?>

         @endforeach</div>
 </div>



@endsection
@section('js')

@endsection
