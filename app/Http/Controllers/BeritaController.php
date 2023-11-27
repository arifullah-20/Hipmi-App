<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BeritaController extends Controller
{
    public function index()
    {

     $data['berita'] = DB::table('berita')->get();


     return view('admin.berita.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.berita.tambah',[
            'kategori'=>DB::table('kategori')->get()
        ]);
    }

    public function store(Request $request)
{

    $namafile=$request->foto_berita->getClientOriginalName();
    $request -> foto_berita->move(public_path('images/berita/'),$namafile);


    DB::table('berita')->insert([
        'id_kategori' => $request->id_kategori,
        'judul_berita' =>$request->judul_berita,
        'slug' =>Str::slug($request->judul_berita),
        'tanggal_berita' =>$request->tanggal_berita,
        'isi_berita' =>$request->isi_berita,
        'foto_berita' =>$namafile
    ]);

    return redirect()->route('data.berita')->with('success', 'berhasil disimpan.');
}





            public function detail($slug)
            {

                $data['berita'] = DB::table('berita')->where('slug',$slug)->first();

            return view('admin.berita.lihat', $data);
            }

    // public function tambah()
    //  {
    //     return view('admin.kategori.tambah');
    //  }

    // public function store(Request $request)
    // {
    //     // Validasi data input


    //     // Simpan data kategori ke dalam database
    //     DB::table('kategori')->insert([
    //         'nama_kategori' => $request->nama_kategori,
    //     ]);

    //     return redirect()->route('data.kategori')->with('success', 'Kategori berhasil disimpan.');
    // }



    // /**
    //  * Display the specified resource.
    //  */
    // public function show(kategori $kategori)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id)
    // {
    //     return view('kategori.edit',[
    //         'kategori'=>DB::table('kategori')->where('id_kategori',$id)->first(),

    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, kategori $kategori)
    // {
    //     //
    // }


    // public function destroy(kategori $kategori)
    // {
    //     //
    // }
}
