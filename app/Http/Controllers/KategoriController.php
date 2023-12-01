<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    public function index()
    {

     $data['kategori'] = DB::table('kategori')->get();

    //  dd($kategori);

     return view('admin.kategori.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.kategori.tambah');
    }

    public function tambah()
     {
        return view('admin.kategori.tambah');
     }

    public function simpan(Request $request)
    {
        // Validasi data input


        // Simpan data kategori ke dalam database
        DB::table('kategori')->insert([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('data.kategori')->with('success', 'Kategori berhasil disimpan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('kategori.edit',[
            'kategori'=>DB::table('kategori')->where('id_kategori',$id)->first(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategori $kategori)
    {
        //
    }


    public function destroy(kategori $kategori)
    {
        //
    }

}
