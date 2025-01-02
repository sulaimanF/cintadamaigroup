@extends('layouts.fe')
@section('content')

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Semua Cabang<span class="text-danger"> Honda</span></h1>
            <p class="mb-0">Cinta Damai Group merupakan perusahaan yang bergerak di bidang otomotif yang menyediakan jaringan penjualan, perawatan, perbaikan dan suku cadang untuk merek resmi seperti Hyundai, Honda, dan Suzuki.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('template_fe/img/honda.png') }}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        {{-- <div class="blog-date">30 Dec 2025</div> --}}
                        <a href="https://honda-eiyu.com/" class="h4 d-block mb-3" target="_blank">Honda Eiyu Indramayu</a>
                        <p class="mb-3">Jalan Pasar Baru Nomor 5, Karangmalang, Kec. Indramayu, Kab. Indramayu, Jawa Barat, 45213</p>
                        <p class="mb-3">Whatsapp : 0821-1628-4848</p>
                        <p class="mb-3">Telphone : 0234-277700</p>
                        <a href="https://maps.app.goo.gl/mD4wb5LY9VXdDJ1u7" target="_blank">Kunjungi Lokasi  <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection
@section('script')
@endsection