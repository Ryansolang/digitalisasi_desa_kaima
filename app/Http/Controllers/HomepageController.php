<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\kategori_artikel;
use App\Models\artikel;
use App\Models\statistik;
use App\Models\keluhan;
use App\Models\surat;

class homepageController extends Controller
{
    //
	public function index(){
		$datapenduduk = statistik::find(1);
		$dataumur0 = statistik::find(2);
		$dataumur11 = statistik::find(3);
		$dataumur21 = statistik::find(4);
		$kategori = kategori_artikel::all();	
		$artikel = artikel::orderBy('created_at', 'DESC')->with('foreign_kategori')->limit(3)->get();
		return view('layouts.homepage.index', compact('artikel','kategori','datapenduduk','dataumur0','dataumur11','dataumur21'));
	}	
	
	public function artikel(){
		$kategori = kategori_artikel::all();
        $artikel = artikel::all();
		return view('layouts.homepage.artikel', compact('artikel','kategori'));    
	}  	
	
	public function detailartikel($id){
		$kategori = kategori_artikel::all();
		$artikelterbaru = artikel::orderBy('id','DESC')->limit(5)->get();
		$artikel = artikel::with('foreign_kategori')->find($id);
		return view('layouts.homepage.detailartikel', compact('artikel','artikelterbaru','kategori'));
	}

	public function detailkategorimenu($id){
		$kategori = kategori_artikel::all();
		$artikel = artikel::orderBy('created_at', 'DESC')->with('foreign_kategori')->where('kategori',$id)->get();		
		$datakategori = kategori_artikel::find($id);
		return view('layouts.homepage.detailkategori', compact('artikel','datakategori','kategori'));
	}		

	public function cariartikel(Request $request){	
		$datacari = $request->input('cari');
		$kategori = kategori_artikel::all();
		$artikel = artikel::with('foreign_kategori')->where('judul_artikel','like',"%".$datacari."%")->get();		
		return view('layouts.homepage.artikel', compact('artikel','datacari','kategori'));	
	}		
	
	public function about(){
	//	$artikel = artikel::orderBy('created_at', 'DESC')->with('foreign_kategori')->get();
		$kategori = kategori_artikel::all();
		return view('layouts.homepage.aboutus', compact('kategori'));
	}	

	public function keluhan(){
		//	$artikel = artikel::orderBy('created_at', 'DESC')->with('foreign_kategori')->get();
		$kategori = kategori_artikel::all();
		return view('layouts.homepage.keluhan', compact('kategori'));
	}	
		
	public function layanan(){
	//	$artikel = artikel::orderBy('created_at', 'DESC')->with('foreign_kategori')->get();
		$kategori = kategori_artikel::all();
		return view('layouts.homepage.layanan_surat', compact('kategori'));
	}		

	public function prosestambahkeluhan(Request $request){
		$keluhan = new keluhan();
		$keluhan->judul_keluhan = $request->input('judul_keluhan');
		$keluhan->nama = $request->input('nama');
		$keluhan->isi_keluhan = $request->input('isi');
		$keluhan->save();
		return redirect()->route('homepage.keluhan')->with('success', 'Berhasil Menambah Data Keluhan');
	}	

	public function prosestambahsurat(Request $request){
		
			$request->validate([
				'attachment' => 'mimes:pdf|max:2048',
				'attachment_kk' => 'mimes:pdf|max:2048',
			]);				
			
			$nama_file = $request->attachment;			
			$filegambar = time().rand(100,999).".".$nama_file->getClientOriginalExtension();		
			
			$nama_file_kk = $request->attachment_kk;			
			$filegambar_kk = time().rand(100,999).".".$nama_file_kk->getClientOriginalExtension();					
		
		$surat = new surat();
		$surat->jenis_surat = $request->input('jenis_surat');
		$surat->nama = $request->input('nama');
		$surat->isi = $request->input('isi');
		$surat->email = $request->input('email');
		$surat->attachment = $filegambar;
		$surat->attachment_kk = $filegambar_kk;
		$surat->status = 'Pending';
		$surat->save();
		
		$nama_file->move(public_path().'/doc/', $filegambar);
		$nama_file_kk->move(public_path().'/doc/', $filegambar_kk);
		
		return redirect()->route('homepage.keluhan')->with('success', 'Berhasil Menambah Data Keluhan');
	}		
	
	
		
}
