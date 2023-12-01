@extends('admin.layout')
@section('title')
Kategori
@endsection

@section('content')

<div class="card mb-3">
    <div class="card-body">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Tambah Kategori
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Logo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/simpan-kategori" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Kategori</label>
                                            <input type="text" id="nameWithTitle" name="nama_kategori" class="form-control"
                                                placeholder="kategori Vidio">
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







<div class="card">
    <h5 class="card-header">Striped rows</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($kategori as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_kategori }}</td>
                    <td>
                        <a href="/kategori-edit/{{$data->id_kategori}}" class="btn btn-success">Ubah</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
