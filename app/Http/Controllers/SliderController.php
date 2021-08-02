<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$sliderList=DB::table('slider')->get();
        return view('admin.sliderIslemleri',compact('sliderList'));
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
        $sliderName = $request->silderName;
        $sliderFotoUrl = $request->sliderFotoUrl;


        $data = [
            'silderName' => $sliderName,
            'sliderFotoUrl' => $sliderFotoUrl,


        ];
      DB::table('slider')->insert($data);
        return redirect()->route('sliderEkle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $editslider=DB::table('slider')->where('id','=',$id)->get();
        return view('admin.sliderdüzenle',compact('editslider'));
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
        $sliderName = $request->silderName;
        $sliderFotoUrl = $request->sliderFotoUrl;


        $data = [
            'silderName' => $sliderName,
            'sliderFotoUrl' => $sliderFotoUrl,


        ];
        DB::table('slider')->where('id','=',$id)->update($data);
        return redirect()->route('sliderlar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('slider')->where('id','=',$id)->delete();
        return redirect()->route('sliderlar');
    }
    public function sliderEkle(){
      return  view('admin.sliderEkle');
    }
}
