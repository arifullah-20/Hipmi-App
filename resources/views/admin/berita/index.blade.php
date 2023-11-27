@extends('admin.layout')
@section('title')
Berita
@endsection

@section('content')
<div class="card">
    <div class="col-md-12">
        <div class="card-body ">
            <a href="/tambah-berita" class="btn btn-success mr-3">Tambah</a>
            <center><h5 class="card-header" style="center">Data Berita</h5></center>
        </div>
    </div>
    <div class="table-responsive text-nowrap">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>judul</th>
                    <th>Tanggal</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($berita as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->judul_berita }}</td>
                    <td>{{ $data->tanggal_berita }}</td>
                    <td><img src="{{ asset('images/berita/'.$data->foto_berita) }}" alt="" width="100px"></td>

                    <td>
                        <a href="/kategori-edit/{{$data->id_kategori}}" class="btn btn-success">Ubah</a>
                        <a href="/berita-lihat/{{$data->slug}}" class="btn btn-success">lihat</a>
                        <a href="/b" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
