<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets3/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/style.css') }}">

</head>


@extends('user.index')

@section('content')

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

<!-- Full Screen Search End -->

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3">
                    <h1 class="display-3 text-white mb-md-4 animated slideInLeft">Hipmi Padang <br>
                        <h5 class="text-white animated slideInLeft">Bergabunglah dengan organisasi pengusaha
                            muda terbesar di Indonesia</h5>
                    </h1>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Join
                        Us</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 120px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 40px; height: 40px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Happy Clients</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 120px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 40px; height: 40px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Projects Done</h5>
                        <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 120px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 40px; height: 40px;">
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Win Awards</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="img-fluid w-75 rounded" alt=""
                        style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="{{ asset('assets/img/carousel-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">

                <h1 class="mb-4">Tentang Kami</h1>

                @foreach ( $sejarah as $data)


                <p>{!! $data->isi_sejarah!!}</p>

                @endforeach
                <br>
                <a href="" class="btn btn-primary rounded-pill px-5 py-3 text-white">Kenali Lebih Dalam</a>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid py-5 ">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Bagian Dari Kami</h1>
        </div>
        <div class="row g-5">
            @php $counter = 0; @endphp
            @foreach ($struktur as $data)
            @if ($counter < 3) <div class="col-lg-4 ">
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
        @php $counter++; @endphp
        @endif
        @endforeach

    </div>
</div>

<div class="container-fluid py-5">
    <div class="weekly2-news-area pt-4 pb-3 gray-bg">
        <div class="weekly2-wrapper">
            <div class="row">
                <!-- Banner -->
                <div class="col-lg-3 col-12">
                    <div class="home-banner2 d-none d-lg-block">
                        <img class="img-fluid" src="{{ asset('assets3/img/gallery/body_card2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="slider-wrapper">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="small-tittle mb-2">
                                    <h4>Most Popular</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly2-news-active d-flex">
                                    <!-- Perulangan untuk menampilkan video -->
                                    @foreach($galeri_video as $data)
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <iframe class="img-fluid rounded" src="{{ $data->video }}" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                                <p>Jhon | 2 hours ago</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Akhir perulangan -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Blog Start -->
        <div class="container-fluid py-5 ">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Berita Terakhir</h5>
                    <h1 class="mb-0">Seputar Hipmi Padang</h1>
                </div>
                <div class="row g-5">
                    @foreach ($berita as $data)
                    <div class="col-lg-4">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('images/berita/' . $data->foto_berita) }}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">{{ $data->nama_kategori }}</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i
                                            class="far fa-calendar-alt text-primary me-2"></i>{{ $data->tanggal_berita }}

                                    </small>
                                </div>
                                <h4 class="mb-3">{{ $data->judul_berita }}</h4>
                                <p>{!! substr(strip_tags($data->isi_berita), 0, 50) !!}...</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Content wrapper -->
        <div class="container-fluid py-5 ">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Video Terbaru</h5>
                    <h1 class="mb-0">Seputar Hipmi Padang</h1>
                </div>
                <div class="row g-5">
                    <!-- Video 1 -->
                    @foreach ($galeri_video as $data)
                    <div class="col-md-4 col-lg-4 mb-3">

                        <div class="iframe-wrapper">
                            {{-- Gunakan tautan embed YouTube yang benar --}}
                            <iframe class="img-fluid rounded" src="{{$data->video}}" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>




        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
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



    </div>


    @endsection

