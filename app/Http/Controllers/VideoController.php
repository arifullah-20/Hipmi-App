<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    public function index(){

        $data['galeri_video'] = DB::table('galeri_video')->get();

        return view('admin.galeri.video.index', $data);
    }


    public function simpan(Request $request)
    {

        DB::table('galeri_video')->insert([
            'video' => $request->video,
        ]);

        return redirect()->route('data.video')->with('success', 'Kategori berhasil disimpan.');
    }

    public function hapus($id)
    {
        DB::table('galeri_video')->where('id_video', $id)->delete();

        // Menambahkan pesan flash ke session
        Session::flash('success', 'Video berhasil dihapus');

        return back();
    }
}




