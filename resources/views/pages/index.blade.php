@extends('layouts.fe')
@section('content')
<!-- Carousel Start -->
<div class="header-carousel">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('template_fe/img/cintadamaigroup.png') }}" class="img-fluid w-100" alt="First slide"/>
                <!-- <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">CONTINUE CAR RESERVATION</h4>
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Your Car type</option>
                                                    <option value="1">VW Golf VII</option>
                                                    <option value="2">Audi A1 S-Line</option>
                                                    <option value="3">Toyota Camry</option>
                                                    <option value="4">BMW 320 ModernLine</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span> <span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="#" class="text-start text-white d-block mb-2">Need a different drop-off location?</a>
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="date">
                                                    <select class="form-select ms-3" aria-label="Default select example">
                                                        <option selected>12:00AM</option>
                                                        <option value="1">1:00AM</option>
                                                        <option value="2">2:00AM</option>
                                                        <option value="3">3:00AM</option>
                                                        <option value="4">4:00AM</option>
                                                        <option value="5">5:00AM</option>
                                                        <option value="6">6:00AM</option>
                                                        <option value="7">7:00AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="date">
                                                    <select class="form-select ms-3" aria-label="Default select example">
                                                        <option selected>12:00AM</option>
                                                        <option value="1">1:00AM</option>
                                                        <option value="2">2:00AM</option>
                                                        <option value="3">3:00AM</option>
                                                        <option value="4">4:00AM</option>
                                                        <option value="5">5:00AM</option>
                                                        <option value="6">6:00AM</option>
                                                        <option value="7">7:00AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-light w-100 py-2">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Get 15% off your rental Plan your trip now</h1>
                                    <p>Treat yourself in USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="{{ asset('template_fe/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="First slide"/>
                <!-- <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">CONTINUE CAR RESERVATION</h4>
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Your Car type</option>
                                                    <option value="1">VW Golf VII</option>
                                                    <option value="2">Audi A1 S-Line</option>
                                                    <option value="3">Toyota Camry</option>
                                                    <option value="4">BMW 320 ModernLine</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="#" class="text-start text-white d-block mb-2">Need a different drop-off location?</a>
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="date">
                                                    <select class="form-select ms-3" aria-label="Default select example">
                                                        <option selected>12:00AM</option>
                                                        <option value="1">1:00AM</option>
                                                        <option value="2">2:00AM</option>
                                                        <option value="3">3:00AM</option>
                                                        <option value="4">4:00AM</option>
                                                        <option value="5">5:00AM</option>
                                                        <option value="6">6:00AM</option>
                                                        <option value="7">7:00AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="date">
                                                    <select class="form-select ms-3" aria-label="Default select example">
                                                        <option selected>12:00AM</option>
                                                        <option value="1">1:00AM</option>
                                                        <option value="2">2:00AM</option>
                                                        <option value="3">3:00AM</option>
                                                        <option value="4">4:00AM</option>
                                                        <option value="5">5:00AM</option>
                                                        <option value="6">6:00AM</option>
                                                        <option value="7">7:00AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-light w-100 py-2">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Get 15% off your rental! Choose Your Model </h1>
                                    <p>Treat yourself in USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Slogan Start -->
<div class="container-fluid slogan py-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp mt-4s" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="display-5 text-capitalize mb-3">Honda, Hyundai, Suzuki</h2>
            <h2>Partner Terbaik untuk Setiap Perjalanan</h2>
        </div>
    </div>
</div>
<!-- Slogan End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="mb-0">Jelajahi beragam pilihan kami dan rasakan kegembiraan mengendarai mobil impian Anda.
            </h4>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('template_fe/img/brv.png') }}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="https://honda-eiyu.com/" target="_blank">Kunjungi Website  <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('template_fe/img/ioniq.png') }}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="https://hyundaimandiri.com/" target="_blank">Kunjungi Website  <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('template_fe/img/xl7.png') }}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="https://suzukicintadamai.co.id/" target="_blank">Kunjungi Website  <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- About Start -->
<div class="container-fluid overflow-hidden about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-5">
                        <h1 class="display-5 text-capitalize"><span class="text-primary">Cinta Damai Group</span></h1>
                        <p class="mb-0">Cinta Damai Group merupakan perusahaan yang bergerak di bidang otomotif yang menyediakan jaringan penjualan, perawatan, perbaikan dan suku cadang untuk merek resmi seperti Hyundai, Honda, dan Suzuki.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="{{ route('pages.about') }}" class="btn btn-primary rounded py-3 px-5">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="img-2">
                        <img src="{{ asset('template_fe/img/suzuki.png') }}" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

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

<!-- Car categories Start -->
<div class="container-fluid categories pb-5">
    <div class="container pb-5">
        <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="{{ asset('template_fe/img/suzuki.png') }}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Branch Suzuki</h4>
                        
                        <a href="{{ route('pages.branchsuzuki') }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Lihat Semua Showroom Suzuki</a>
                    </div>
                </div>
            </div>
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="{{ asset('template_fe/img/honda.png') }}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Branch Honda</h4>
                        
                        <a href="{{ route('pages.branchhonda') }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Lihat Semua Showroom Honda</a>
                    </div>
                </div>
            </div>
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="{{ asset('template_fe/img/hyundai.png') }}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Branch Hyundai</h4>
                        
                        <a href="{{ route('pages.branchhyundai') }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Lihat Semua Showroom Hyundai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car categories End -->

@endsection

@section('script')

@endsection