@extends('layouts.fe')
@section('content')

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3"><span class="text-primary">Services</span></h1>
            <p class="mb-0">Menyediakan berbagai layanan unggulan, mulai dari penjualan kendaraan baru, layanan test drive untuk memberikan pengalaman berkendara, perawatan dan perbaikan di bengkel resmi, hingga penyediaan suku cadang asli untuk memastikan kepuasan dan kenyamanan pelanggan
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa-solid fa-screwdriver-wrench fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Booking Service</h5>
                    <p class="mb-0">Jadwalkan service mobil Suzuki, Honda, dan Hyundai anda di dealer resmi kami</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-car-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Test Drive</h5>
                    <p class="mb-0">Nikmati pengalaman test drive mobil Suzuki, Honda, dan Hyundai dengan mudah, cukup kunjungi dealer resmi kami</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa-solid fa-brush fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Body & Paint</h5>
                    <p class="mb-0">Layanan Body & Paint hadir untuk memperbaiki kerusakan bodi serta memberikan sentuhan cat berkualitas tinggi</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa-solid fa-gears fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Sparepart</h5>
                    <p class="mb-0">Pelanggan mobil Suzuki, Honda, dan Hyundai dapat dengan mudah mendapatkan suku cadang asli melalui dealer resmi kami, memastikan kualitas, keamanan, dan performa kendaraan tetap terjaga</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        {{-- <i class="fa fa-building fa-2x"></i> --}}
                        <i class="fa-regular fa-face-smile fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Customer Care</h5>
                    <p class="mb-0">Layanan Customer Care untuk mobil Suzuki, Honda, dan Hyundai siap memberikan solusi terbaik terkait pertanyaan, keluhan, atau kebutuhan pelanggan</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

@endsection
@section('script')
@endsection