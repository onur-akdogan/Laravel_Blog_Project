<?php

namespace App\Http\Controllers;

use App\Models\usersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $listUsers=  DB::table('users')->latest('id')->get();
      return  view('admin.kullaniciIslemleri',compact('listUsers'));
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
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $data=[
            'name'=>$name,
            'email'=>$email,
            'password'=>bcrypt($password),

        ];
        usersModel::create($data);
        return redirect()->route('kullanicilar');

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
        $kullanici = DB::table('users')->select('name', 'email','password')

            ->where('id', '=', $id)->get();



        return view('admin.kullaniciUpdate', compact('kullanici'));
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
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $data=[
            'name'=>$name,
            'email'=>$email,
            'password'=>bcrypt($password),
        ];
        DB::table('users')
            ->where('id', '=',$id)
            ->update($data);
        return redirect()->route('kullanicilar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->route('kullanicilar');

    }
    public function kullaniciEkle()
    {

       return view('admin.kullaniciEkle');
    }
}
