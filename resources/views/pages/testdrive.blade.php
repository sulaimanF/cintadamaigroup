@extends('layouts.fe')
@section('content')

<!-- Banner Start -->
<div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="banner-item rounded">
            <img src="{{ asset('template_fe/img/testdrive.png') }}" class="img-fluid rounded w-100" alt="">
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- About Start -->
<div class="container-fluid overflow-hidden about py-0">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-5">
                        <h1 class="display-8 text-capitalize">Booking <span class="text-primary">Test Drive Suzuki</span></h1>
                        <p class="mb-0 text-item my-4">Rasakan sensasi berkendara terbaik dengan melakukan test drive mobil Suzuki, pilihan tepat untuk Anda yang mencari kenyamanan, performa, dan efisiensi bahan bakar dalam satu paket. Dengan desain modern dan fitur canggih, mobil Suzuki siap menemani perjalanan Anda. , baik untuk aktivitas harian di perkotaan maupun petualangan jarak jauh.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="https://wa.me/+6282116284848" class="btn btn-primary rounded py-3 px-3"><i class="fa-solid fa-phone"></i> Hubungi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-5">
                        <h1 class="display-8 text-capitalize">Booking <span class="text-primary">Test Drive Honda</span></h1>
                        <p class="mb-0 text-item my-4">Nikmati pengalaman berkendara yang penuh gaya dan kenyamanan dengan melakukan test drive mobil Honda, pilihan sempurna bagi anda yang menginginkan performa handal, efisiensi tinggi, dan teknologi canggih. Dengan desain elegan, fitur keselamatan mutakhir, dan mesin bertenaga yang ramah lingkungan.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="https://wa.me/+6287718613553" class="btn btn-primary rounded py-3 px-3"><i class="fa-solid fa-phone"></i> Hubungi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-5">
                        <h1 class="display-8 text-capitalize">Booking <span class="text-primary">Test Drive Hyundai</span></h1>
                        <p class="mb-0 text-item my-4">elajahi inovasi dan kenyamanan kelas dunia dengan melakukan test drive mobil Hyundai, kendaraan yang dirancang untuk memberikan performa unggul, teknologi mutakhir, dan efisiensi yang luar biasa. Dengan desain modern yang memukau, fitur keselamatan terbaik, serta interior yang luas dan nyaman.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="" class="btn btn-primary rounded py-3 px-3"><i class="fa-solid fa-phone"></i> Hubungi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection
@section('script')
@endsection