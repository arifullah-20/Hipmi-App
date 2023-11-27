@extends('admin.layout')
@section('title')
{{ $berita->slug}}
@endsection

@section('content')


<div class="col-md-12 ">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">{{ $berita->judul_berita }}</h5>
        <h6 class="card-subtitle text-muted"> {{ $berita->tanggal_berita }} </h6>
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="{{ asset ('images/berita/'.$berita->foto_berita) }}" alt="Card image cap" style="width: 60%" />
        <p class="card-text">{!! nl2br($berita->isi_berita) !!}</p>

      </div>
    </div>
</div>



@endsection
