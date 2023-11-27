@extends('admin.layout')
@section('title')
Tambah Jabatan
@endsection

@section('content')

<div class="col-md-12">
    <div class="card mb-4">
        <h5 class="card-header">Tambah Jabatan</h5>
        <div class="card-body">
            <form action="/simpan-Jabatan" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="judul_berita" id="exampleFormControlInput1"
                        placeholder="jabatan"/>
                </div>
                <button type="submit" class="btn btn-primary ">Tambah</button>
            </form>
        </div>
    </div>
</div>

@endsection
