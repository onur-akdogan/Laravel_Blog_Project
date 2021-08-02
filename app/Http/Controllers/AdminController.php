<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;

use App\Models\CategoryModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){

        return view('admin.index');
    }
    public function  userProfile(){
        $user=Auth::user();
        return view('admin.userProfile',compact('user'));
    }
    public function urunEkleGit(){
        $list=CategoryModel::select('id','kategoriIsım','status','created_at')->get();
        return view('admin.urunEkle',compact('list'));
    }

    public function urunAdd(Request $request){

        dd($request->all());
    }


    public function mesajlaragit(){
       $listmessage=DB::table('message')->get();

        return view('admin.mesajlar',compact('listmessage'));
    }
    public function mesajsil($id){

        DB::table('message')->where('id', '=', $id)->delete();
        return redirect()->route('mesajlaragit');
    }

    public function mesajOku($id){
        $listmessages=  DB::table('message')->where('id', '=', $id)->get();
foreach ($listmessages as $mesaj){
    $icerik= $mesaj->mesajContent;
    $gonderenMail= $mesaj->gonderenmail;
}
            ?>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>


        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasTopLabel">Gönderen Mail:  <?php echo $gonderenMail;?></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <?php echo $icerik;?>


            </div>
        </div>

        <?php




    }
public function clearCache(){



     Artisan::call('cache:clear');

    return view('admin.index');

}





    public function  UpdateUserProfile(Request $request){
        $email=$request->email;
        $name=$request->name;
        $password=$request->password;

        $userID=Auth::id();
        //$user=User::where('id',$userID)->first();
        $dublicateControl=User::where('email','!=',auth()->user()->$email)
            ->where('email',$email)->first();

        if ($dublicateControl){
            alert()->error('Uyarı', 'Bu Email Adresi kullanılmaka')->showConfirmButton('Tamam', '#3085d6');
            return redirect()->route('userProfile');
        }
        $user=User::find($userID);
        $user->name=$name;
        $user->email=$email;
        if ($password){
            $user->password=bcrypt($password);
        }
        $user->save();
       // return view('admin.userProfile',compact('user'));
        alert()->success('Uyarı', 'Güncelleme İşlemi Başarılı')->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('userProfile');


    }
}
