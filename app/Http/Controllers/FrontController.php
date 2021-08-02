<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;use PHPHtmlParser\Dom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {




        $slider = DB::table('slider')->latest('id')->limit(20)->get();
        $bloglar = DB::table('blog')->latest('id')->limit(4)->get();
        $firmalar = DB::table('firmalar')->latest('id')->where('status','=',1)->limit(6)->get();
        $onecikanUrunler = DB::table('urunler_tabel')->where('onecikar','=',1)->latest('id')->limit(3)->get();
        $settings = DB::table('settings')->get();
        return view('front.index', compact('slider', 'settings','bloglar','onecikanUrunler','firmalar'));
    }

    public function kategori($id)
    {
        $kategoriUrunler = DB::table('urunler_tabel') ->where('kategori.id', '=', $id)->where('urunler_tabel.status','=',1)
            ->join('kategori', 'urunler_tabel.kategoriId', '=', 'kategori.id')
            ->latest('urunler_tabel.id')->get();
        return view("front.categories", compact('kategoriUrunler'));


    }

    public function Tumurunler()
    {

        $urunler =

            DB::table('urunler_tabel') ->where('status','=',1)

            ->latest('id')->get();
        return view("front.urunler", compact('urunler' ));

    }

    public function urunDetay($id)
    {
      $secilenUrun = DB::table('urunler_tabel')->where('id','=',$id)->get();
        return view("front.urunDetay", compact('secilenUrun'));
    }
    public function blogDetay($id)
    {
      $secilenblog = DB::table('blog')->where('id','=',$id)->get();
        return view("front.blogdetay", compact('secilenblog'));
    }
    public function hakkimizda()

    {

        return view("front.hakkimizda");
    }
    public function bloglar()

    {
        $bloglar=DB::table('blog')->get();

        return view("front.bloglar",compact('bloglar'));
    }
    public function iletisim()
    {

        return view("front.iletisim");
    }   public function regex()
    {

        return view("front.regex");
    }
    public function MesajGonder(Request $request)
    {


        $gonderenisim = $request->gonderenisim;
        $gonderenmail = $request->gonderenmail;
        $mesajName= $request->mesajName;
        $mesajKonu = $request->mesajKonu;
        $mesajContent = $request->mesajContent;


        $data = [
            'gonderenisim' => $gonderenisim,
            'gonderenmail' => $gonderenmail,
            'mesajName' => $mesajName,
            'mesajKonu' => $mesajKonu,
            'mesajContent' => $mesajContent,


        ];
        DB::table('message')->insert($data);

        return redirect()->route('iletisim');

    }


}
