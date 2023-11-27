<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StrukturController extends Controller
{

    public function index (){
        $jab['jabatan'] = DB::table('jabatan')->get();
        $data['struktur'] = DB::table('struktur')
        ->join('jabatan','struktur.id_jabatan','=','jabatan.id_jabatan')
        ->get();

        return view ('admin.struktur.index', $data, $jab);
   }

   public function create()
   {

       return view('admin.berita.tambah',[
           'jabatan'=>DB::table('jabatan')->get()
       ]);
   }

   public function simpan(Request $request)
   {

       $namafile=$request->foto->getClientOriginalName();
       $request->foto->move(public_path('images/organisasi/'), $namafile);


       DB::table('struktur')->insert([
           'id_jabatan' => $request->id_jabatan,
           'nama' =>$request->nama,
           'perusahaan' =>$request->perusahaan,
           'instagram' =>$request->instagram,
           'linkedin' =>$request->linkedin,
           'foto' =>$namafile
       ]);

       return redirect()->route('data.struktur')->with('success', 'berhasil disimpan.');
   }


}
