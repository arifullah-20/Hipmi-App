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
                            <h4 class="card-title">Visi</h4>
                            <form action="/visi-edit/{{$vismis->id_vismis}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <input id="form1" name="visi" type="text"  value="{!! $vismis->visi !!}" hidden>
                                    <label for="exampleFormControlReadOnlyInput1" class="form-label"></label>
                                    <trix-editor input="form1"></trix-editor>
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
