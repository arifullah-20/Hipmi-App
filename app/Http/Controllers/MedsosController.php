<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedsosController extends Controller
{
    public function index(){

        $data['tb_medsos'] = DB::table('tb_medsos')->get();


        return view('admin.medsos.index', $data);
       }
}
