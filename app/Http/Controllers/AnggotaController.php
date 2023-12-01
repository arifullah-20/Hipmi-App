<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use App\Imports\AnggotaImport;

class AnggotaController extends Controller
{
        public function index(){

            return view('admin.anggota.index');
        }


        public function simpan(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Import data ke tabel
        Excel::import(new AnggotaImport(), $request->file('file'),\Maatwebsite\Excel\Excel::XLSX);

        return back()->with('success', 'Data berhasil diimpor!');
    }
}
