@extends('user.index')

@section('content')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" style="height: 400px" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3">
                    <h1 class="display-3 text-white mb-md-4 animated slideInLeft"> Tentang Kami <br>
                    </h1>
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
                <h5 class="text-primary">Tentang Kami</h5>
                <h1 class="mb-4">About HighTech Agency And It's Innovative IT Solutions</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus
                    ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam
                    volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam
                    mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra.
                    Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat
                    vestibulum, et malesuada augue laoreet.</p>
                <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam
                    volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam
                    mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra.
                    Suspendisse viverra hendrerit diam in tempus.</p>
                <a href="" class="btn btn-primary rounded-pill px-5 py-3 text-white">More
                    Details</a>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid py-5 ">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Visi Misi</h5>
            <h1 class="mb-0">Visi Misi</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 ">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                    <h2 class="mb-3">Visi</h2>
                    @foreach ( $vismis as $data )


                    <p class="m-0">{!!$data->visi!!}</p>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 col-md-6 ">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                    <h2 class="mb-3">Misi</h2>
                    @foreach ( $vismis as $data )


                    <p class="m-0">{!!$data->misi!!}</p>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>



@endsection
