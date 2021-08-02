<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloglar=DB::table('blog') ->latest('id')->get();
        return view('admin.bloglar',compact('bloglar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fotoUrl = $request->fotoUrl;
        $baslik = $request->baslik;
        $altbaslik = $request->altbaslik;
        $icerik = $request->icerik;
        $anahtarKelime= $request->anahtarKelime;
        $aciklama= $request->aciklama;
        $data = [
            'fotoUrl' => $fotoUrl,
            'baslik' => $baslik,
            'altbaslik' => $altbaslik,
            'icerik' => $icerik,
            'anahtarKelime' => $anahtarKelime,
            'aciklama' => $aciklama,


        ];
DB::table('blog')->insert($data);
        return redirect()->route('bloglar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fotoUrl = $request->fotoUrl;

        $baslik = $request->baslik;
        $altbaslik = $request->altbaslik;
        $icerik = $request->icerik;
        $anahtarKelime= $request->anahtarKelime;
        $aciklama= $request->aciklama;
        $data = [
            'fotoUrl' => $fotoUrl,
            'baslik' => $baslik,
            'altbaslik' => $altbaslik,
            'icerik' => $icerik,
            'anahtarKelime' => $anahtarKelime,
            'aciklama' => $aciklama,


        ];


        DB::table('blog')
            ->where('id', '=',$id)
            ->update($data);
        return redirect()->route('bloglar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('blog')->where('id','=',$id)->delete();
        return redirect()->route('bloglar');
    }
    public function blogEkle()
    {
        return view('admin.blogEkle');
    }
    public function blogDuzenle($id)
    {
        $list=DB::table('blog')->where('id','=',$id)->get();
        return view('admin.blogDuzenle',compact('list'));


    }
}
