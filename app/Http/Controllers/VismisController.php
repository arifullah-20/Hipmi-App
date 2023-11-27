<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VismisController extends Controller
{
    public function index(){
        $data['vismis'] = DB::table('vismis')->get();

        return view ('admin.visi_misi.index', $data);
    }


    public function editvisi($id)
{

    return view('admin.visi_misi.ubahvisi',[
        'vismis'=>DB::table('vismis')->where('id_vismis',$id)->first(),
    ]);
}

    public function visiedit(Request $request, $id){

        DB::table('vismis')->where('id_vismis',$id)->update([
            'visi'=>$request->visi,

        ]);
        return redirect('/vismis-index');
    }

    public function editmisi($id)
    {

        return view('admin.visi_misi.ubahmisi',[
            'vismis'=>DB::table('vismis')->where('id_vismis',$id)->first(),
        ]);
    }

        public function misiedit(Request $request, $id){

            DB::table('vismis')->where('id_vismis',$id)->update([
                'misi'=>$request->misi,

            ]);
            return redirect('/vismis-index');
        }

}
