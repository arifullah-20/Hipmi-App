@extends('admin.layout')
@section('title')
Sejarah
@endsection

@section('content')

<div class="card mb-3">
    <div class="card-body">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Ubah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Ubah Sejarah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                     @foreach ( $sejarah as $data )


                                <form method="POST" action="/simpan-sejarah/{{ $data->id_sejarah }}"
                                    enctype="multipart/form-data">



                                    @csrf
                                    <div class="row">
                                        <div class="mb-3">
                                            <input id="form1" name="isi_sejarah" type="text" hidden>
                                            <label for="exampleFormControlReadOnlyInput1" class="form-label"></label>
                                            <trix-editor input="form1"></trix-editor>
                                        </div>
                                    </div>
                                    <!-- ... tambahkan elemen formulir lainnya sesuai kebutuhan Anda ... -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="row mb-5">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">

                    <div class="card-body">
                        <p class="card-text">
                            @foreach ( $sejarah as $data )
                            {!! $data->isi_sejarah !!}
                            @endforeach
                        </p>

                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
