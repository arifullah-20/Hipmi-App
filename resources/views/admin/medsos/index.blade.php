@extends('admin.layout')
@section('title')
Medsos
@endsection

@section('content')


    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        {{-- //trik editor --}}

                        <input id="form1" type="text" hidden>
                        <trix-editor input="form1"></trix-editor>

                        <br>
                        <h4 class="card-title">Data Kelas</h4>
                        <p class="card-description">
                            <a href="/tambah-kelas" class="btn btn-success btn-sm">Tambah</a>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto Carousel</th>
                                            <th>Tiktok</th>
                                            <th>Instagram</th>
                                            <th>facebook</th>
                                            <th>twitter</th>
                                            <th>youtube</th>
                                            <th>Alamat</th>
                                            <th>email</th>
                                            <th width="25%" style="text-align: center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $tb_medsos as $data )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->youtube }}</td>
                                            <td>.</td>
                                            <td style="text-align: center">
                                                <a href="" class="btn btn-success">Ubah</a>
                                                <a href="" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
<div>



        @endsection
