@extends('layouts.fe')
@section('content')

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3"><span class="text-primary">Cinta Damai Group</span></h1>
            <p class="mb-0">Cinta Damai Group merupakan perusahaan yang bergerak di bidang otomotif yang menyediakan jaringan penjualan, perawatan, perbaikan dan suku cadang untuk merek resmi seperti Hyundai, Honda, dan Suzuki.
            </p>
        </div>

        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <img src="{{ asset('template_fe/img/suzuki.png') }}" class="img-fluid rounded w-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item about p-4">
                            <h4 class="mb-3">Merupakan dealer automotif resmi di wilayah yang meliputi Cirebon, Kuningan, Majalengka, dan Indramayu dan sudah berdiri sejak tahun 1994 memberikan pelayanan terbaik bagi masyarakat, perusahaan dan instansi pemerintahan yang membutuhkan kendaraan sebagai pendukung mobilitas.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <h3 class="mb-3">PT Cinta Damai Putra Bahagia</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <h5 class="mb-3"><span class="fw-bold">Suzuki</span> 7 Showroom</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <img src="{{ asset('template_fe/img/suzuki.png') }}" class="img-fluid rounded w-100" alt="Image">
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <h3 class="mb-3">PT Eiyu Damai Sejahtera</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <h5 class="mb-3"><span class="fw-bold">Honda</span> 2 Showroom</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <img src="{{ asset('template_fe/img/honda.png') }}" class="img-fluid rounded w-100" alt="Image">
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <h3 class="mb-3">PT Akbar Mandiri Sejahtera</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <h5 class="mb-3"><span class="fw-bold">Hyundai</span> 2 Showroom</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <img src="{{ asset('template_fe/img/hyundai.png') }}" class="img-fluid rounded w-100" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">
                        <h3 class="mb-3">Grup Dealer Resmi untuk Merek Suzuki, Honda, dan Hyundai</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <img src="{{ asset('template_fe/img/logo.png') }}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Fact Counter -->
<div class="container-fluid counter py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <!-- <i class="fas fa-thumbs-up fa-2x"></i> -->
                        <i class="fa-solid fa-house fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="fs-2 fw-bold h1" data-toggle="counter-up">11</span>
                    </div>
                    <h4 class="mb-0">Showrooms</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-car-alt fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="fs-2 fw-bold h1" data-toggle="counter-up">70</span>
                        <span class="h1 fw-bold">K+</span>
                    </div>
                    <h4 class="mb-0">Cars Sold</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-building fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="fs-2 fw-bold h1" data-toggle="counter-up">500</span>
                        <span class="h1 fw-bold">+</span>
                    </div>
                    <h4 class="mb-0">Employees</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-database fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="fs-2 fw-bold h1" data-toggle="counter-up">100</span>
                        <span class="h1 fw-bold">K+</span>
                    </div>
                    <h4 class="mb-0">Database Customers</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Counter -->

<!-- Team Start -->
{{-- <div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Meet Our<span class="text-primary"> Team</span> </h1>
            
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item p-4 pt-0">
                    <div class="team-img">
                        <img src="{{ asset('template_fe/img/team-1.jpg') }}" class="img-fluid rounded w-100" alt="Image">
                    </div>
                    <div class="team-content pt-4">
                        <h4>Wahyu Sulaeman</h4>
                        <p>Direktur Utama</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4 pt-0">
                    <div class="team-img">
                        <img src="{{ asset('template_fe/img/team-2.jpg') }}" class="img-fluid rounded w-100" alt="Image">
                    </div>
                    <div class="team-content pt-4">
                        <h4>Lanny Wibawa</h4>
                        <p>Direktur Keuangan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4 pt-0">
                    <div class="team-img">
                        <img src="{{ asset('template_fe/img/team-3.jpg') }}" class="img-fluid rounded w-100" alt="Image">
                    </div>
                    <div class="team-content pt-4">
                        <h4>Vincent Lee</h4>
                        <p>Direktur</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4 pt-0">
                    <div class="team-img">
                        <img src="{{ asset('template_fe/img/team-4.jpg') }}" class="img-fluid rounded w-100" alt="Image">
                    </div>
                    <div class="team-content pt-4">
                        <h4>Puspa Aroma</h4>
                        <p>Wakil Direktur Keuangan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->


@endsection

@section('script')

@endsection