@extends('user.index')

@section('content')

@section('title')
Anggota
@endsection
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" style="height: 400px" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3">
                    <h1 class="display-3 text-white mb-md-4 animated slideInLeft"> Anggota<br>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Data Anggota</h5>

        </div>
        <div class="row g-5">

            @foreach ($struktur as $data)
            <div class="col-lg-4 ">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('images/organisasi/' . $data->foto) }}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{ $data->instagram }}"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{ $data->linkedin }}"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">{{ $data->nama }}</h4>
                        <p class="text-uppercase m-0">{{ $data->nama_jabatan }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <div class="container-fluid py-5" >
        <div class="container py-5 mb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Perusahaan yang tergabung</h5>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach ( $tb_perusahaan as $data )
                    <img src="{{ asset('images/perusahaan/'.$data->logo) }}" alt="">
                    @endforeach
                </div>

            </div>

        </div>
    </div>

    @endsection
