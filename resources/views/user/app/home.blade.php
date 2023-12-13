<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets3/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/css/slick.css') }}">
    <style>
        .testimonial-video iframe {
            width: 100%;
            height: 250px;
            object-fit: cover;
            /* atau object-fit: contain; tergantung pada preferensi Anda */
        }

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

        #CustomId {
    text-decoration: none;
    transition: color 0.3s ease;
    background-color: #e0ae3a; /* Mengubah warna latar belakang */

    /* Gaya default (ketika tidak dihover) */
    border: 2px solid #e0ae3a; /* Mengubah border dan ketebalannya */
    color: #fff; /* Mengubah warna teks */
}

#CustomId:hover {
    /* Gaya saat dihover */
    border: 2px solid #000; /* Mengubah warna border saat dihover */
    color: #000; /* Mengubah warna teks saat dihover */
}

.text-custom {
    color: #e0ae3a !important;
}

.btn-custom {
    background-color: #e0ae3a;
    border-color: #e0ae3a;
}

.btn-custom:hover {
    background-color: #c4922b;
    border-color: #c4922b;
    color: #fff;
}

    </style>


</head>


@extends('user.index')

@section('content')


<!-- Full Screen Search End -->

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3">
                    <h1 class="display-3 text-white mb-md-4 animated slideInLeft">HIPMI Padang <br>
                        <h5 class="text-white animated slideInLeft">Bergabunglah dengan organisasi pengusaha
                            muda terbesar di Indonesia</h5>
                    </h1>
                    <a href="/contact" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                        id="CustomID">Join
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
                <div class=" shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 120px; background: #e0ae3a  ">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 40px; height: 40px;">
                        <i class="fa fa-users text-color: #f0deb4;"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Anggota</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">3632</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 120px; background: #f0deb4;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 40px; height: 40px; ">
                        <i class="fa fa-check text-color: #f0deb4;"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Cabang</h5>
                        <h1 class="mb-0 text-white" data-toggle="counter-up">6</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class=" shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 120px; background: #e0ae3a  ">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 40px; height: 40px;">
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Pengurus Inti</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">170</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-5 ">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-custom text-uppercase">tentang kami</h5>
                    <h1 class="mb-0">Tentang Hipmi Padang</h1>
                </div>
                <p class="mb-4">
                    <p>Sejak 1978, HIPMI Jaya membina pengusaha muda untuk berjuang, bukan hanya untuk kesuksesan diri dan usahanya, tapi juga untuk bangsa. Organisasi ini berawal dari sekelompok pengusaha yang ingin mencapai cita-cita kemandirian ekonomi bangsa, salah satunya dengan menumbuhkan semangat kewirausahaan di kalangan anak muda. Pembentukan HIPMI diniatkan sebagai wadah yang dapat menampung dan menghimpun aspirasi pengusaha muda Indonesia, juga menjad rumah untuk tumbuh, berkembang, dan berjuang bersama demi kemandirian bangsa.</p>
                </p>
                <a href="/about" class="btn btn-custom rounded-pill px-5 py-3 text-white">Kenali Lebih Dalam</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="{{ asset('assets/img/carousel-2.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bagian Dari Kami -->
<div class="container-fluid py-5 ">
    <div class="container py-5 ">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Bagian Dari Kami</h1>
        </div>
        <div class="row g-5">
            @php $counter = 0; @endphp
            @foreach ($struktur as $data)
            @if ($counter < 3)
            <div class="col-lg-4 ">
                <div class="team-item rounded overflow-hidden" style="background: #faf0d9">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('images/organisasi/' . $data->foto) }}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-custom btn-lg-square rounded" href="{{ $data->instagram }}"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-custom btn-lg-square rounded" href="{{ $data->linkedin }}"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-custom">{{ $data->nama }}</h4>
                        <p class="text-uppercase m-0">{{ $data->nama_jabatan }}</p>
                    </div>
                </div>
            </div>
            @php $counter++; @endphp
            @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Berita Terakhir -->
<div class="container-fluid py-5 ">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-custom text-uppercase">Berita Terakhir</h5>
            <h1 class="mb-0">Seputar Hipmi Padang</h1>
        </div>
        <div class="row g-5">
            @foreach ($berita as $data)
            <div class="col-lg-4">
                <div class="blog-item rounded overflow-hidden" style="background: #faf0d9">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('images/berita/' . $data->foto_berita) }}" alt="">
                        <a class="position-absolute top-0 start-0  rounded-end mt-5 py-2 px-4" style="background-color: #e0ae3a; color:white;"
                            href="">{{ $data->nama_kategori }}</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small><i class="far fa-calendar-alt text-custom me-2"></i>{{ $data->tanggal_berita }}</small>
                        </div>
                        <h4 class="mb-3">{{ $data->judul_berita }}</h4>
                        <p>{!! substr(strip_tags($data->isi_berita), 0, 50) !!}...</p>
                        <a class="text-uppercase"  href="/berita-detail/{{ $data->slug }}">Selengkapnya<i class="bi bi-arrow-right"></i></a>
                        </i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Vidio Terbaru -->
<div class="container-fluid py-5 " >
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-custom text-uppercase">Vidio Terbaru</h5>
            <h1 class="mb-0">Momen Terbaik Kami</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <!-- Menggunakan Blade Directives -->
            @forelse($galeri_video as $video)
            <div class="testimonial-item my-4" style="background: #faf0d9">
                <div class="testimonial-video">
                    <iframe class="img-fluid" src="{{ $video->video }}" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                    <p class="card-text">Author</p>
                </div>
            </div>
            @empty
            <p class="text-muted">No videos available.</p>
            @endforelse
            <!-- Akhir Blade Directives -->
        </div>
    </div>
</div>

<script>
    // Fungsi untuk menginisialisasi wow.js
    function initializeWow() {
        new WOW().init();
    }

    // Memanggil fungsi inisialisasi setelah elemen-elemen ditambahkan
    initializeWow();

    // Memanggil fungsi inisialisasi wow.js setelah carousel testimonial diinisialisasi
    document.getElementById('testimonialCarousel').addEventListener('initialized.owl.carousel', function () {
        initializeWow();
    });

</script>


<div class="container-fluid py-5" >
    <div class="container py-5 mb-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-uppercase">usaha yang tergabung</h5>
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
