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


        $data ['vismis'] =DB::table('vismis')->get();

        return view('user.app.about', $data);

    }
}

