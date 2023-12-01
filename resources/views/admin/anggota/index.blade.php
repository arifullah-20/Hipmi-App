@extends('admin.layout')
@section('title')
Jabatan
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="card">
    <div class="card-body">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Tambah Anggota
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Jabatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/simpan-anggota" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Name</label>
                                            <input type="file" name="file" accept=".xlsx, .xls"
                                                class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <!-- ... tambahkan elemen formulir lainnya sesuai kebutuhan Anda ... -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5 class="card-header">Striped rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Jabatan</th>
                        <th>Bidang Usaha</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a href=""></a>
                        <a href=""></a>

                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    @endsection
