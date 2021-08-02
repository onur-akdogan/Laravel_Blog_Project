<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   $list= DB::table('kategori')->get();
        //     dd($list);
    $list=CategoryModel::select('id','kategoriIsım','status','created_at')->get();



     return view('admin.kategoriEkle',compact('list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $kadergoriIsım=$request->kategori;
        $data=[
            'kategoriIsım'=>$kadergoriIsım,

        ];
        CategoryModel::create($data);
        return redirect()->route('kategoriIslemleri');

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
        DB::table('kategori')->where('id', '=', $id)->delete();
        return redirect()->route('kategoriIslemleri');
    }

    public function statusChange($id,$durum){



        $data = [
            'status' => $durum,
        ];
        DB::table('kategori')
            ->where('id', '=',$id)
            ->update($data);

return redirect()->route('kategoriIslemleri');



    }
}
