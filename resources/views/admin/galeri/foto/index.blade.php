@extends('admin.layout')
@section('title')
Video
@endsection

@section('content')


<div class="card">
    <div class="card-body">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Tambah Video
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Video</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/simpan-video" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Video</label>
                                            <input type="text" id="nameWithTitle" name="video" class="form-control"
                                                placeholder="tempel link video disini">
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


    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">

                        <img class="img-fluid d-flex mx-auto my-4 rounded" style="width: 100%"
                            src="data:image/jpeg;base64,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" alt=""
                            alt="Card image cap" />
                            <h6 class="card-subtitle text-muted">ini adalah capto</h6>

                    </div>
                </div>
            </div>



        </div>
    </div>

</div>
@endsection

