<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{

    public function index (){


        $data['jabatan'] = DB::table('jabatan')->get();

        return view('admin.struktur.jabatan.index', $data );
       }


    public function simpan(Request $request){
        $data['jabatan'] = DB::table('jabatan')->get();
        DB::table('jabatan')->insert([
                        'nama_jabatan' => $request->nama_jabatan,
                    ]);

        return redirect()->route('data.jabatan')->with('success', 'Data jabatan berhasil disimpan.');

    }
}
