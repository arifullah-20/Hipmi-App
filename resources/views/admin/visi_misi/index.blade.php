@extends('admin.layout')
@section('title')
Visi Misi
@endsection

@section('content')


<div class="row mb-5">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    @foreach ( $vismis as $data )
                    <div class="card-body">


                        <a href="/edit-visi/{{ $data->id_vismis }}" class="btn btn-primary mr-auto" >ubah</a>
                        <h5 class="card-title mt-3">Visi</h5>



                        <p class="card-text">
                        {!! $data->visi !!}
                        </p>

                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    @foreach ( $vismis as $data )
                    <div class="card-body">


                        <a href="/edit-misi/{{ $data->id_vismis }}" class="btn btn-primary mr-auto" >ubah</a>
                        <h5 class="card-title mt-3">Misi</h5>



                        <p class="card-text">
                        {!! $data->misi !!}
                        </p>

                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
