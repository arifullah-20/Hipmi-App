
@extends('user.index')

@section('content')

@section('title')
Berita
@endsection

<style>
    /* Style yang berlaku untuk semua perangkat */
    #header-carousel .carousel-inner {
        /* Gaya default, misalnya tanpa tinggi tertentu */
    }

    /* Style yang berlaku hanya untuk perangkat dengan lebar layar lebih dari 768px (asumsi lebar PC) */
    @media screen and (min-width: 768px) {
        #header-carousel .carousel-inner {
            height: 400px; /* Atur tinggi sesuai kebutuhan */
        }
    }
</style>

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3">
                    <h1 class="display-3 text-white mb-md-4 animated slideInLeft">Berita <br>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>


  <!-- Blog Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    @foreach ($berita as $data)
                    <div class="col-lg-6">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('images/berita/' . $data->foto_berita) }}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">{{ $data->nama_kategori }}</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $data->tanggal_berita }}

                                    </small>
                                </div>
                                <h4 class="mb-3">{{ $data->judul_berita }}</h4>
                                <p>{!! substr(strip_tags($data->isi_berita), 0, 50) !!}...</p>
                                <a class="text-uppercase" href="/berita-detail/{{ $data->slug }}">Selengkapnya<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg m-0">
                            <li class="page-item disabled">
                              <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Categories</h3>
                    </div>
                    @foreach ( $kategori as $data2)


                    <div class="link-animated d-flex flex-column justify-content-start">
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>{{ $data2->nama_kategori}}</a>
                    </div>
                    @endforeach
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Berita Lainnya</h3>
                    </div>

                    @php $counter = 0 @endphp
                    @foreach ($berita as $dataTerakhir)
                        @if ($counter < 4)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('images/berita/' . $dataTerakhir->foto_berita) }}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{$dataTerakhir->judul_berita}}</a>
                            </div>
                            @php $counter++ @endphp
                        @else
                            @break
                        @endif
                    @endforeach
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->

                <!-- Tags End -->

                <!-- Plain Text Start -->

                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog End -->
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

