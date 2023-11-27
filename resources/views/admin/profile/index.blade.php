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
                    <th>Jalan</th>
                    <th>Email</th>
                    <th>twitter</th>
                    <th>Facebook</th>
                    <th>linkedin</th>
                    <th>instagram</th>
                    <th>Youtube</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img src="" alt="" width="100px"></td>

                    {{-- <td>
                        <a href="" class="btn btn-success">Ubah</a>
                        <a href="" class="btn btn-success">lihat</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td> --}}
                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection
