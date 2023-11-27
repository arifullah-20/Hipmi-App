@extends('admin.layout')
@section('title')
Medsos
@endsection

@section('content')



<div class="card">
    <div class="card-body">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Tambah Struktur
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Struktur</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/simpan-struktur" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Nama</label>
                                            <input type="text" id="nameWithTitle" name="nama" class="form-control"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Jabatan</label>
                                            <select class="form-select" name="id_jabatan">
                                                <option value="">Pilih Kategori</option>
                                                @foreach ( $jabatan as $jab )
                                                <option value="{{$jab->id_jabatan}}">{{$jab->nama_jabatan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Perusahaan</label>
                                            <input type="text" id="nameWithTitle" name="perusahaan" class="form-control"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Instagram</label>
                                            <input type="text" id="nameWithTitle" name="instagram" class="form-control"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Linkedin</label>
                                            <input type="text" id="nameWithTitle" name="linkedin" class="form-control"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Foto</label>
                                            <input type="file" id="nameWithTitle" name="foto" class="form-control"
                                                placeholder="Enter Name">
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
    </div>
</div>
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <!-- Basic Buttons -->



    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            @foreach ( $struktur as $data )
            <div class="col-md-4 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">



                        <h5 class="card-title">{{ $data->nama}}</h5>
                        <h6 class="card-subtitle text-muted">{{ $data->nama_jabatan}}</h6>

                        <img class="img-fluid d-flex mx-auto my-4 rounded" src="{{ asset('images/organisasi/'.$data->foto) }}" alt=""
                            alt="Card image cap"/>
                            <h6 class="card-subtitle ">{{ $data->perusahaan}}</h6>
                        <a href="{{ $data->linkedin }};" class="card-link">Card link</a>
                        <a href="{{ $data->linkedin }};" class="card-link">Another link</a>

                    </div>
                </div>
            </div>

                @endforeach
        </div>
    </div>

</div>



@endsection
