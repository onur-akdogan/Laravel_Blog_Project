<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\UrunController;
use \App\Http\Controllers\ControllerUsers;
use \App\Http\Controllers\SettingsController;
use \App\Http\Controllers\SliderController;
use \App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//FRONT
Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/kategori/{id}',[FrontController::class,'kategori'])->name('kategori');
Route::get('/Tumurunler',[FrontController::class,'Tumurunler'])->name('Tumurunler');
Route::get('/urunDetay/{id}',[FrontController::class,'urunDetay'])->name('urunDetay');
Route::get('/blogDetay/{id}',[FrontController::class,'blogDetay'])->name('blogDetay');
Route::get('/hakkimizda',[FrontController::class,'hakkimizda'])->name('hakkimizda');
Route::get('/iletisim',[FrontController::class,'iletisim'])->name('iletisim');
Route::get('/tumBloglar',[FrontController::class,'bloglar'])->name('tumBloglar');
Route::post('/iletisim',[FrontController::class,'MesajGonder'])->name('iletisim');
Route::get('/regex',[FrontController::class,'regex'])->name('regex');



Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
});



//ADMİNPANEL

//Login İşlemleri
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::get('login',[LoginController::class,'showLogin']);


Route::get('admin/index',[AdminController::class,'index'])->name('AdminIndex');
Route::get('admin/ClearCache',[AdminController::class,'clearCache'])->name('clearCache');
Route::get('admin/user',[AdminController::class,'userProfile'])->name('userProfile');
Route::put('admin/user',[AdminController::class,'UpdateUserProfile'])->name('UpdateUserProfile');

//Urun işlemleri
Route::get('admin/urunEkle',[AdminController::class,'urunEkleGit'])->name('urunEkleGit');
Route::get('admin/urunler',[UrunController::class,'index'])->name('urunler');
Route::post('admin/urunEkle',[UrunController::class,'store'])->name('urunAdd');
Route::get('admin/urunsil/{id}',[UrunController::class,'destroy'])->name('urunsil');
Route::get('admin/urunler/{id}',[UrunController::class,'destroy'])->name('kategoriSil');
Route::get('admin/urunDuzenle/{id}',[UrunController::class,'edit'])->name('urunDuzenle');
Route::post('admin/urunDuzenle/{id}',[UrunController::class,'update'])->name('urunguncelle');
Route::get('admin/urunler/statusChangeUrun/{id}/{durum}',[UrunController::class,'statusChange'])->name('statusChangeUrun');
Route::get('admin/urunler/onecikar/{id}/{onecikar}',[UrunController::class,'onecikar'])->name('onecikar');

//kategori işlemleri
Route::get('admin/kategori',[CategoryController::class,'index'])->name('kategoriIslemleri');
Route::post('admin/kategori',[CategoryController::class,'store'])->name('kategoriAdd');
Route::get('admin/kategori/{id}',[CategoryController::class,'destroy'])->name('kategoriSil');
Route::get('admin/kategori/statusChangeKategori/{id}/{durum}',[CategoryController::class,'statusChange'])->name('statusChangeKategori');

Route::get('admin/mesajlaragit',[AdminController::class,'mesajlaragit'])->name('mesajlaragit');
Route::get('admin/mesajsil/{id}',[AdminController::class,'mesajsil'])->name('mesajsil');
Route::get('admin/mesajOku/{id}',[AdminController::class,'mesajOku'])->name('mesajOku');

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');


Route::get('admin/kullanicilar',[ControllerUsers::class,'index'])->name('kullanicilar');
Route::get('admin/kullaniciEkle',[ControllerUsers::class,'kullaniciEkle'])->name('kullaniciEkle');
Route::post('admin/kullaniciEkle',[ControllerUsers::class,'store'])->name('kullaniciKayit');
Route::post('admin/kullaniciDüzenle/{id}',[ControllerUsers::class,'update'])->name('kullaniciDuzenle');
Route::get('admin/kullanicilar/{id}',[ControllerUsers::class,'destroy'])->name('kullanicisil');
Route::get('admin/kullaniciDüzenle/{id}',[ControllerUsers::class,'edit'])->name('kullaniciUpdate');


Route::get('admin/settings',[SettingsController::class,'index'])->name('settings');
Route::post('admin/settings/',[SettingsController::class,'update'])->name('settingsupdate');

Route::get('admin/sliderlar',[SliderController::class,'index'])->name('sliderlar');
Route::get('admin/sliderekle',[SliderController::class,'sliderEkle'])->name('sliderEkle');
Route::post('admin/sliderekle',[SliderController::class,'store'])->name('sliderkayit');
Route::get('admin/silderSil/{id}',[SliderController::class,'destroy'])->name('silderSil');
Route::get('admin/sliderEdit/{id}',[SliderController::class,'edit'])->name('sliderEdit');
Route::post('admin/sliderEdit/{id}',[SliderController::class,'update'])->name('sliderEdit');

//Blog
Route::get('admin/bloglar',[BlogController::class,'index'])->name('bloglar');
Route::get('admin/blogDuzenle/{id}',[BlogController::class,'blogDuzenle'])->name('blogDuzenle');
Route::get('admin/blogEkle',[BlogController::class,'blogEkle'])->name('blogkaydet');
Route::post('admin/blogEkle',[BlogController::class,'store'])->name('blogEkle');
Route::get('admin/bloglar/{id}',[BlogController::class,'destroy'])->name('blogsil');
Route::post('admin/blogDuzenle/{id}',[BlogController::class,'update'])->name('blogDuzenleSayfasi');

Route::get('admin/firmalar',[FirmaController::class,'index'])->name('firmaIslemleri');
Route::post('admin/firmalar',[FirmaController::class,'store'])->name('firmaAdd');
Route::get('admin/firmalar/{id}',[FirmaController::class,'destroy'])->name('firmaSil');
Route::get('admin/firmalar/statusChangeFirma/{id}/{durum}',[FirmaController::class,'statusChange'])->name('statusChangefirma');




