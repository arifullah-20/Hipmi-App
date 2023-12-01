@extends('user.index')

@section('title')
About
@endsection

@section('content')


<!-- Vendors CSS -->
<style>
    .iframe-wrapper {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 56.25%;
        /* 16:9 aspect ratio */
    }

    .iframe-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

</style>


<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" style="height: 400px" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3">
                    <h1 class="display-3 text-white mb-md-4 animated slideInLeft"> Vidio Hipmi<br>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 ">
    <div class="container py-5">
        <div class="row">
            <!-- Video 1 -->
            @foreach ($galeri_video as $data)
            <div class="col-md-6 col-lg-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="iframe-wrapper">
                            {{-- Gunakan tautan embed YouTube yang benar --}}
                            <iframe class="img-fluid rounded" src="{{$data->video}}" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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
