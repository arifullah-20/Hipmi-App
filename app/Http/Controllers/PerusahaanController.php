<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PerusahaanController extends Controller
{
 public function index(){


    $data ['tb_perusahaan']= DB::table('tb_perusahaan')->get();

    return view('admin.perusahaan.index',$data);

 }


public function simpan(Request $request){

    $namafile=$request->logo->getClientOriginalName();
     $request -> logo->move(public_path('images/perusahaan/'),$namafile);


     DB::table('tb_perusahaan')->insert([
        'id_perusahaan' => $request->id_perusahaan,
        'logo' => $namafile

     ]);
     return redirect()->route('data.perusahaan')->with('success', 'berhasil disimpan.');
    }
}

// public function store(Request $request)
// {

//     $namafile=$request->foto_berita->getClientOriginalName();
//     $request -> foto_berita->move(public_path('images/berita/'),$namafile);


//     DB::table('berita')->insert([
//         'id_kategori' => $request->id_kategori,
//         'judul_berita' =>$request->judul_berita,
//         'slug' =>Str::slug($request->judul_berita),
//         'tanggal_berita' =>$request->tanggal_berita,
//         'isi_berita' =>$request->isi_berita,
//         'foto_berita' =>$namafile
//     ]);

//     return redirect()->route('data.berita')->with('success', 'berhasil disimpan.');
// }
