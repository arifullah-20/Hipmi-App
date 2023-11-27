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
            <!-- Video 1 -->
            @foreach ($galeri_video as $data)
                <div class="col-md-6 col-lg-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="iframe-wrapper">
                                {{-- Gunakan tautan embed YouTube yang benar --}}
                                <iframe class="img-fluid rounded" src="{{$data->video}}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <br>
                            <a class="btn btn-danger" href="">hapus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <style>
        .iframe-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%; /* 16:9 aspect ratio */
        }

        .iframe-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>




@endsection
