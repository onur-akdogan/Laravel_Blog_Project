<?php

namespace App\Http\Controllers;

use App\Models\FirmalarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firmalar=DB::table('firmalar')->get();
        return view('admin.firmalar',compact('firmalar'));
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
        $firmaName = $request->firmaName;


        $data = [
            'firmaName' => $firmaName,
            'fotoUrl' => $fotoUrl,


        ];
        FirmalarModel::create($data);
        return redirect()->route('firmaIslemleri');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('firmalar')->where('id','=',$id)->delete();
        return redirect()->route('firmaIslemleri');
    }
    public function statusChange($id,$durum){

        $data = [
            'status' => $durum,
        ];
        DB::table('firmalar')
            ->where('id', '=',$id)
            ->update($data);
        return redirect()->route('firmaIslemleri');




    }
}
