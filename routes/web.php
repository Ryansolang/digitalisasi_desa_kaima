<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage.home');
Route::get('/aboutus', [App\Http\Controllers\HomepageController::class, 'about'])->name('homepage.aboutus');

Route::get('/artikel', [App\Http\Controllers\HomepageController::class, 'artikel'])->name('homepage.artikel');
Route::get('/keluhan', [App\Http\Controllers\HomepageController::class, 'keluhan'])->name('homepage.keluhan');
Route::post('/keluhan/', [App\Http\Controllers\HomepageController::class, 'prosestambahkeluhan'])->name('keluhan.prosestambah'); 
Route::post('/surat/', [App\Http\Controllers\HomepageController::class, 'prosestambahsurat'])->name('surat.prosestambah'); 


Route::get('/layanan', [App\Http\Controllers\HomepageController::class, 'layanan'])->name('homepage.layanan');

Route::get('/artikel/cari', [App\Http\Controllers\HomepageController::class, 'cariartikel'])->name('homepage.cariartikel');
Route::get('/artikel/{id}', [App\Http\Controllers\HomepageController::class, 'detailartikel'])->name('homepage.detailartikel');	

Route::get('/kategori/{id}', [App\Http\Controllers\HomepageController::class, 'detailkategorimenu'])->name('homepage.detailkategorimenu');

Route::group(['prefix' => 'admin', 'middleware' => ['level_admin','auth']], function(){
    // users route
	
	Route::get('/home', [App\Http\Controllers\AdminController::class, 'Home'])->name('admin.home')->middleware('level_admin');

    Route::get('/artikel', [App\Http\Controllers\AdminController::class, 'tampilartikel'])->name('artikel.home')->middleware('level_admin');
    Route::get('/artikel/tambah', [App\Http\Controllers\AdminController::class, 'tambahartikel'])->name('artikel.tambah')->middleware('level_admin');
    Route::delete('/artikel/{id}', [App\Http\Controllers\AdminController::class, 'hapusartikel'])->name('artikel.hapus')->middleware('level_admin');	
    Route::post('/artikel/', [App\Http\Controllers\AdminController::class, 'prosestambahartikel'])->name('artikel.prosestambah')->middleware('level_admin');
    Route::get('/artikel/{id}', [App\Http\Controllers\AdminController::class, 'editartikel'])->name('artikel.edit')->middleware('level_admin');
    Route::put('/artikel/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdateartikel'])->name('artikel.prosesupdate')->middleware('level_admin'); 	
	
    Route::get('/kategori', [App\Http\Controllers\AdminController::class, 'tampilkategori'])->name('kategori.home')->middleware('level_admin');
    Route::get('/kategori/tambah', [App\Http\Controllers\AdminController::class, 'tambahkategori'])->name('kategori.tambah')->middleware('level_admin');
    Route::delete('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'hapuskategori'])->name('kategori.hapus')->middleware('level_admin');	
    Route::post('/kategori/', [App\Http\Controllers\AdminController::class, 'prosestambahkategori'])->name('kategori.prosestambah')->middleware('level_admin');
    Route::get('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'editkategori'])->name('kategori.edit')->middleware('level_admin');
    Route::put('/kategori/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatekategori'])->name('kategori.prosesupdate')->middleware('level_admin');	
	
     Route::get('/statistik', [App\Http\Controllers\AdminController::class, 'statistiktampil'])->name('statistik.home')->middleware('level_admin');
     Route::get('/statistik/tambah', [App\Http\Controllers\AdminController::class, 'tambahstatistik'])->name('statistik.tambah')->middleware('level_admin');
     Route::post('/statistik/', [App\Http\Controllers\AdminController::class, 'prosestambahstatistik'])->name('statistik.prosesTambah')->middleware('level_admin');  
     Route::get('/statistik/{id}', [App\Http\Controllers\AdminController::class, 'editstatistik'])->name('statistik.edit')->middleware('level_admin');
     Route::delete('/statistik/{id}', [App\Http\Controllers\AdminController::class, 'hapusstatistik'])->name('statistik.hapus')->middleware('level_admin');	
     Route::put('/statistik/{id}', [App\Http\Controllers\AdminController::class, 'prosesupdatestatistik'])->name('statistik.prosesupdate')->middleware('level_admin');    	
	
    Route::get('/keluhan', [App\Http\Controllers\AdminController::class, 'tampilkeluhan'])->name('keluhan.home')->middleware('level_admin');
    Route::get('/keluhan/{id}', [App\Http\Controllers\AdminController::class, 'detailkeluhan'])->name('keluhan.detailkeluhan')->middleware('level_admin');
    Route::get('/surat', [App\Http\Controllers\AdminController::class, 'tampilsurat'])->name('surat.home')->middleware('level_admin');
    Route::get('/surat/{id}', [App\Http\Controllers\AdminController::class, 'detailsurat'])->name('surat.detailsurat')->middleware('level_admin');
    Route::put('/surat/{id}', [App\Http\Controllers\AdminController::class, 'proseuploadsk'])->name('surat.uploadsk')->middleware('level_admin'); 

}); 


