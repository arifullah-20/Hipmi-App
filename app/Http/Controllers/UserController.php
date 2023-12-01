<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['galeri_video'] =DB::table('galeri_video')->get();
        $data['tb_perusahaan'] =DB::table('tb_perusahaan')->get();
        $data['sejarah'] =DB::table('sejarah')->get();

        $data['struktur'] = DB::table('struktur')
        ->join('jabatan', 'struktur.id_jabatan', '=' ,'jabatan.id_jabatan')
        ->get();

        $data['berita'] = DB::table('berita')
        ->join('kategori','berita.id_kategori', '=' ,'kategori.id_kategori')
        ->take(3)
        ->get();

        return view('user.app.home', $data );

    }
    public function about(){

        $data['tb_perusahaan'] =DB::table('tb_perusahaan')->get();
        $data ['vismis'] =DB::table('vismis')->get();
        $data['sejarah'] =DB::table('sejarah')->get();

        return view('user.app.about', $data);

    }

    public function detail($slug)
    {
        $dataTerakhir['beritaTerakhir'] = DB::table('berita')
         ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
         ->take(3)
         ->get();

        $data2['kategori'] = DB::table('kategori')->get();


        $data['berita'] = DB::table('berita')
        ->where('slug', $slug)
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->first(); // or ->get() if you expect multiple results

        $viewData = array_merge($data, $data2, $dataTerakhir);

        return view('user.app.detailberita',$viewData);
    }

    public function berita(){
        $dataTerakhir['beritaTerakhir'] = DB::table('berita')
        ->join('kategori', 'berita.id_kategori', '=', 'kategori.id_kategori')
        ->take(3)
        ->get();

       $data2['kategori'] = DB::table('kategori')->get();

       $data['tb_perusahaan'] =DB::table('tb_perusahaan')->get();
        $data['berita'] = DB::table('berita')
        ->join('kategori','berita.id_kategori', '=' ,'kategori.id_kategori')
        ->get();

        $viewData = array_merge($data, $data2, $dataTerakhir);

        return view('user.app.berita', $viewData);

    }

    public function anggota(){
        $data['tb_perusahaan'] =DB::table('tb_perusahaan')->get();
        $data['struktur'] = DB::table('struktur')
        ->join('jabatan', 'struktur.id_jabatan', '=' ,'jabatan.id_jabatan')
        ->get();


        return view('user.app.anggota', $data );

}

    public function contact(){



        return view('user.app.contact');
}

    public function vidio(){
        $data['tb_perusahaan'] =DB::table('tb_perusahaan')->get();
        $data['galeri_video'] = DB::table('galeri_video')->get();

        return view('user.app.vidio', $data);
}



}
