@extends('admin.layout')
@section('title')
Dashboard
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="col-md-12  align-items-stretch">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card-body col-md-12 ">
                            <h4 class="card-title">Misi</h4>
                            <form action="/misi-edit/{{$vismis->id_vismis}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <input id="form1" name="misi" type="text"  value="{!! $vismis->misi !!}" hidden>
                                    <label for="exampleFormControlReadOnlyInput1" class="form-label"></label>
                                    <trix-editor input="form1">{!! $vismis->misi !!}</trix-editor>
                                </div>

                                <button type="submit" class="btn btn-primary ">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        @endsection
