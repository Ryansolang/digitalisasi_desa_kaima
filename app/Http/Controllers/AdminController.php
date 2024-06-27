<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;

//user
use Auth;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\kategori_artikel;
use App\Models\artikel;
use App\Models\statistik;
use App\Models\keluhan;
use App\Models\surat;

use PDF;

class adminController extends Controller
{
    //
	
	public function Home(){
		$countartikel = artikel::count();
		$countkategori_artikel = kategori_artikel::count();
		$countsurat = surat::count();
		$countkeluhan = keluhan::count();
		$countstatistik = statistik::count();
		return view('layouts.admin.home', compact('countsurat','countkeluhan','countartikel','countstatistik','countkategori_artikel'));
		
	}	
	
	//mulai kategori
	
	public function tampilkategori(){
		$kategori_artikel = kategori_artikel::all();
		return view('layouts.admin.tampilkategori', compact('kategori_artikel'));
	}	
	
	public function tambahkategori(){
		return view('layouts.admin.tambahkategori');
	}		
	
	public function prosestambahkategori(Request $request){
			$kategori_artikel = new kategori_artikel();
			$kategori_artikel->nama_kategori = $request->input('nama_kategori');
			$kategori_artikel->hastag_kategori = $request->input('hastag_kategori');
			$kategori_artikel->save();
			return redirect()->route('kategori.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editkategori($id)
   {
       $kategori_artikel = kategori_artikel::find($id);
       return view('layouts.admin.editkategori', compact('kategori_artikel'));		
   }  	
	
   public function prosesupdatekategori(Request $request, $id)
   {
       $ubh = kategori_artikel::findorfail($id);
           $dt = [
               'nama_kategori' => $request['nama_kategori'],
               'hastag_kategori' => $request['hastag_kategori'],
           ];	
           $ubh->update($dt);
           return redirect()->route('kategori.home')->with('success', 'Data Berhasil di ubah');	
   } 	
   
	public function hapuskategori($id){
		$kategori_artikel = kategori_artikel::find($id);
		$kategori_artikel->delete(); 		
		return redirect()->route('kategori.home')->with('success', 'Data Berhasil di hapus');
	}

	// Mulai artikel
	
	public function tampilartikel(){
		$artikel = artikel::with('foreign_kategori')->get();
		return view('layouts.admin.tampilartikel', compact('artikel'));
	}	
	
	public function tambahartikel(){
		$kategori_artikel = kategori_artikel::all();
		return view('layouts.admin.tambahartikel', compact('kategori_artikel'));
	}		
	
	public function prosestambahartikel(Request $request){
		
			$datauser_aktif = Auth::user()->id;
			
			$request->validate([
				'gambar_artikel' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:5000',
			]);		
			
			$nama_file = $request->gambar_artikel;			
			$filegambar = time().rand(100,999).".".$nama_file->getClientOriginalName();			
		
			$artikel = new artikel();
			$artikel->judul_artikel = $request->input('judul_artikel');
			$artikel->isi_artikel = $request->input('isi_artikel');
			$artikel->users = $datauser_aktif;
			$artikel->gambar_artikel = $filegambar;
			$artikel->kategori = $request->input('kategori');
			$artikel->save();
			
			$nama_file->move(public_path().'/gambarartikel/', $filegambar);
			return redirect()->route('artikel.home')->with('success', 'Berhasil Menambah Data');
	}
	
   public function editartikel($id)
   {
       $artikel = artikel::with('foreign_kategori')->find($id);
	   $kategori_artikel = kategori_artikel::all();
       return view('layouts.admin.editartikel', compact('artikel','kategori_artikel'));		
   }  	
	
   public function prosesupdateartikel(Request $request, $id)
   {
       $ubh = artikel::findorfail($id);
	   $data_awal = $ubh->gambar_artikel;
		if ($request->gambar_artikel == '')
		{	   
           $dt = [
               'judul_artikel' => $request['judul_artikel'],
               'isi_artikel' => $request['isi_artikel'],
               'kategori' => $request['kategori'],
           ];	
           $ubh->update($dt);
           return redirect()->route('artikel.home')->with('success', 'Data Berhasil di ubah');	
		}
		else {
		   
			$request->validate([
				'gambar_artikel' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:2048',
			]);				   
		   			
           $dt = [
               'judul_artikel' => $request['judul_artikel'],
               'isi_artikel' => $request['isi_artikel'],
               'gambar_artikel' => $data_awal,
               'kategori' => $request['kategori'],
           ];	
		   $request->gambar_artikel->move(public_path().'/gambarartikel/', $data_awal);
           $ubh->update($dt);
           return redirect()->route('artikel.home')->with('success', 'Data Berhasil di ubah');				
		}
   } 	
   
	public function hapusartikel($id){
		$artikel = artikel::find($id);
		$artikel->delete(); 		
		return redirect()->route('artikel.home')->with('success', 'Data Berhasil di hapus');
	}	
	
   public function statistiktampil(){
    $statistik = statistik::all();
    return view('layouts.admin.tampilstatistik', compact('statistik'));		
    }       

   public function editstatistik($id)
   {
       //
       // $produk = produk::with('nama_kategori')->get();
       $statistik = statistik::find($id);
       return view('layouts.admin.editstatistik', compact('statistik'));		
   }   

   public function prosesupdatestatistik(Request $request, $id)
   {
       //
       //$produk = produk::find($id);
       $ubh = statistik::findorfail($id);
           $dt = [
               'nama_statistik' => $request['nama_statistik'],
               'jumlah' => $request['jumlah'],
           ];	
           $ubh->update($dt);
           return redirect()->route('statistik.home')->with('success', 'Data Berhasil di ubah');	
   }
   
	public function tampilsurat(){
		$surat = surat::all();
		return view('layouts.admin.tampilsurat', compact('surat'));
	}	
	
	public function tampilkeluhan(){
		$keluhan = keluhan::all();
		return view('layouts.admin.tampilkeluhan', compact('keluhan'));
	}	
	
	public function detailkeluhan($id)
	{
		//
		// $produk = produk::with('nama_kategori')->get();
		$keluhan = keluhan::find($id);
		return view('layouts.admin.detailkeluhan', compact('keluhan'));		
	}   	

	public function detailsurat($id)
	{
		//
		// $produk = produk::with('nama_kategori')->get();
		$surat = surat::find($id);
		return view('layouts.admin.detailsurat', compact('surat'));		
	}   	

	public function proseuploadsk(Request $request, $id)
	{
		//
		//$produk = produk::find($id);
		$ubh = surat::findorfail($id);

		//$data_awal = $ubh->file_surat;

		$request->validate([
			'file_surat' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:2048',
		]);				   
				   
	   $dt = [
		   'status' => 'Selesai',
	   ];	
	   $ubh->update($dt);

	   //

	   $data["title"] = "File SK Telah Jadi";
	   $data["body"] = "Terimakasih telah menunggu silahkan mendownload file SK yang telah di ajukan";
	   $data["nama"] = $ubh->nama;	   
	   $data["jenis_surat"] = $ubh->jenis_surat;	   
	   $data["created_at"] = $ubh->created_at;	 
	  
	   $isimail = [
		   'title' => 'File SK Telah Jadi',
		   'body' => 'Terimakasih telah menunggu, Silahkan data ke kantor desa untuk mengambil SK tersebut',
		   'nama' => $ubh->nama,
		   'jenis_surat' => $ubh->jenis_surat,
		   'created_at' => $ubh->created_at,
	   ];		
	   
	   //$pdf = PDF::loadView('layouts.email.sk', $isimail);
	   
	   $tujuan = $ubh->email;
	   
	   $message = new sendmail($isimail);
	//   $message->attachData($pdf->output(), "sk.pdf");	
	   Mail::to($tujuan)->send($message);	   

	   return redirect()->route('artikel.home')->with('success', 'Berhasil Mengirim SK');		
	}	
	
}
