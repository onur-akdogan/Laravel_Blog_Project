<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\UrunModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUrun = DB::table('urunler_tabel')->select('urunler_tabel.urunIsim', 'urunler_tabel.urunFotoUrl', 'urunler_tabel.id', 'urunler_tabel.created_at', 'kategori.kategoriIsım', 'urunler_tabel.status', 'urunler_tabel.onecikar')
            ->join('kategori', 'urunler_tabel.kategoriId', '=', 'kategori.id')
            ->latest('urunler_tabel.id')->get();

        //  $listUrun=UrunModel::latest('id')->paginate(10);
        //  $listUrun= DB::table('urunler')->get();
        // $listUrun=UrunModel::all()->get();
        return view('admin.urunler', compact('listUrun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        $urunFotoUrl = $request->urunFotoUrl;
        $kategoriId = $request->kategori;
        $videoId = $request->videoId;
        $urunIsim = $request->title;
        $urunAltBaslik = $request->subtitle;
        $urunIcerik = $request->content;
        $urunanahtarkelime = $request->keywords;
        $urunAciklama = $request->description;

        $data = [
            'urunFotoUrl' => $urunFotoUrl,
            'kategoriId' => $kategoriId,
            'videoId' => $videoId,
            'urunIsim' => $urunIsim,
            'urunAltBaslik' => $urunAltBaslik,
            'urunIcerik' => $urunIcerik,
            'urunanahtarkelime' => $urunanahtarkelime,
            'urunAciklama' => $urunAciklama,

        ];
        UrunModel::create($data);
        return redirect()->route('urunEkleGit');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $list = DB::table('urunler_tabel')->select('urunler_tabel.urunIsim', 'urunler_tabel.id', 'urunler_tabel.urunFotoUrl','urunler_tabel.created_at', 'urunler_tabel.videoId', 'urunler_tabel.urunAltBaslik', 'urunler_tabel.urunanahtarkelime', 'urunler_tabel.urunAciklama', 'urunler_tabel.urunIcerik', 'kategori.kategoriIsım',)
            ->join('kategori', 'urunler_tabel.kategoriId', '=', 'kategori.id')
            ->where('urunler_tabel.id', '=', $id)->get();
        $listkategori=CategoryModel::select('id','kategoriIsım','status','created_at')->get();


        return view('admin.urunDuzenle', compact('list','listkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $urunFotoUrl = $request->urunFotoUrl;
        $kategoriId = $request->kategori;
        $videoId = $request->videoId;
        $urunIsim = $request->title;
        $urunAltBaslik = $request->subtitle;
        $urunIcerik = $request->content;
        $urunanahtarkelime = $request->keywords;
        $urunAciklama = $request->description;
        $data = [
            'urunFotoUrl' => $urunFotoUrl,
            'kategoriId' => $kategoriId,
            'videoId' => $videoId,
            'urunIsim' => $urunIsim,
            'urunAltBaslik' => $urunAltBaslik,
            'urunIcerik' => $urunIcerik,
            'urunanahtarkelime' => $urunanahtarkelime,
            'urunAciklama' => $urunAciklama,

        ];


         DB::table('urunler_tabel')
            ->where('id', '=',$id)
            ->update($data);
        return redirect()->route('urunler');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('urunler_tabel')->where('id', '=', $id)->delete();
        return redirect()->route('urunler');
    }

    public function statusChange($id,$durum){

            $data = [
                'status' => $durum,
            ];
            DB::table('urunler_tabel')
                ->where('id', '=',$id)
                ->update($data);
            return redirect()->route('urunler');




    }    public function onecikar($id,$onecikar){

            $data = [
                'onecikar' => $onecikar,
            ];
            DB::table('urunler_tabel')
                ->where('id', '=',$id)
                ->update($data);
            return redirect()->route('urunler');




    }

}
