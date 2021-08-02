<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = DB::table('settings')->select('siteName','slogan','anahtarkelime','aciklama', 'mail','telefon','fax', 'adres','hakkimizda','facebook', 'twitter','youtube','instagram')

            ->where('id', '=', 1)->get();


        return view('admin.settings',compact('settings'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $siteName=$request->siteName;
        $slogan=$request->slogan;
        $anahtarkelime=$request->anahtarkelime;
        $mail=$request->mail;
        $aciklama=$request->aciklama;
        $telefon=$request->telefon;
        $fax=$request->fax;
        $adres=$request->adres;
        $hakkimizda=$request->hakkimizda;
        $facebook=$request->facebook;
        $twitter=$request->twitter;
        $youtube=$request->youtube;
        $instagram=$request->instagram;
        $data=[
            'siteName'=>$siteName,
            'slogan'=>$slogan,
            'anahtarkelime'=>$anahtarkelime,
            'mail'=>$mail,
            'aciklama'=>$aciklama,
            'telefon'=>$telefon,
            'fax'=>$fax,
            'adres'=>$adres,
            'hakkimizda'=>$hakkimizda,
            'facebook'=>$facebook,
            'twitter'=>$twitter,
            'youtube'=>$youtube,
            'instagram'=>$instagram,
        ];
        DB::table('settings')
            ->where('id', '=',1)
            ->update($data);
        return redirect()->route('settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
