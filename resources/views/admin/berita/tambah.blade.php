@extends('admin.layout')
@section('title')
Kategori
@endsection

@section('content')

<div class="col-md-12">
    <div class="card mb-4">
        <h5 class="card-header">Tambah Berita</h5>
        <div class="card-body">
            <form action="/simpan-berita" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" name="id_kategori">
                        <option value="">Pilih Kategori</option>
                        @foreach ( $kategori as $k )
                        <option value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul_berita" id="exampleFormControlInput1"
                        placeholder="judul berita" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Tanggal</label>
                    <input class="form-control" name="tanggal_berita" type="date" id="exampleFormControlReadOnlyInput1"
                        placeholder="" />
                </div>

                <div class="mb-3">
                    <input id="form1" name="isi_berita" type="text" hidden>
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Isi</label>
                    <trix-editor input="form1"></trix-editor>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Berita</label>
                    <input class="form-control" name="foto_berita" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary ">Tambah</button>
            </form>
        </div>
    </div>
</div>

@endsection
