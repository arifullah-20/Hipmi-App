<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SejarahController extends Controller
{

    public function index (){


        $data['sejarah'] = DB::table('sejarah')->get();

        return view('admin.sejarah.index', $data );
       }


    public function simpan(Request $request, $id){

        DB::table('sejarah')->where('id_sejarah',$id)->update([
                        'isi_sejarah' => $request->isi_sejarah,
                    ]);

        return redirect()->route('data.sejarah')->with('success', 'Data sejarah berhasil disimpan.');

    }

    public function misiedit(Request $request, $id){

        DB::table('vismis')->where('id_vismis',$id)->update([
            'misi'=>$request->misi,

        ]);
        return redirect('/vismis-index');
    }

}
