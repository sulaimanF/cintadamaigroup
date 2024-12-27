<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">About Us</h4>
                        <p class="mb-3">Cinta Damai Group merupakan perusahaan yang bergerak di bidang otomotif yang menyediakan jaringan penjualan, pemeliharaan, perbaikan dan suku cadang untuk merek resmi seperti Hyundai, Honda, dan Suzuki</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="{{ route('pages.index') }}"><i class="fas fa-angle-right me-2"></i> Home</a>
                    <a href="{{ route('pages.about') }}"><i class="fas fa-angle-right me-2"></i> About</a>
                    <a href="{{ route('pages.services') }}"><i class="fas fa-angle-right me-2"></i> Services</a>
                    {{-- <a href="#"><i class="fas fa-angle-right me-2"></i> Team</a> --}}
                    <a href="{{ route('pages.contact') }}"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Our Network</h4>
                    <a href="https://suzukicintadamai.co.id/" target="_blank"><i class="fas fa-angle-right me-2"></i> Suzuki</a>
                    <a href="https://honda-eiyu.com/" target="_blank"><i class="fas fa-angle-right me-2"></i> Honda</a>
                    <a href="https://hyundaimandiri.com/" target="_blank"><i class="fas fa-angle-right me-2"></i> Hyundai</a>
                </div>
                <br>
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Opening Hours</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Senin - Sabtu:</h6>
                        <p class="text-white mb-0">09.00 am to 05.00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Selasa - Jumat</h6>
                        <p class="text-white mb-0">09.00 am to 04.00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Vacation:</h6>
                        <p class="text-white mb-0">All Sunday is our vacation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <a href="https://maps.app.goo.gl/yJZRBmg5zBSdTEiA6" target="_blank"><i class="fa fa-map-marker-alt me-2"></i> Jalan Kalijaga, Nomor 117 Kota Cirebon</a>
                    <a href="mailto:mscintadamaigroup@gmail.com" target="_blank"><i class="fas fa-envelope me-2"></i> mscintadamaigroup@gmail.com</a>
                    <a href="tel:+0231230506" target="_blank"><i class="fas fa-phone me-2"></i> +0231230506</a>
                    <a href="https://wa.me/+6282116284848" class="mb-3" target="_blank"><i class="fas fa-message me-2"></i> +6282116284848</a>
                    <div class="d-flex">
                        {{-- <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f text-white"></i></a> --}}
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.tiktok.com/@cintadamaigroup?_t=8sYYjZXfoN5&_r=1" target="_blank"><i class="fab fa-tiktok text-white"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="https://www.instagram.com/cintadamaigroup?igsh=MW5uOW8zOTd2enNmdw==" target="_blank"><i class="fab fa-instagram text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start text-body">
                {{ date('Y')}}
            </div>
            <div class="col-md-6 text-center text-md-end mb-md-0">
                <span class="text-body"><a href="{{ route('pages.index') }}" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Cinta Damai Group</a>, All right reserved.</span>
            </div>
        </div>
    </div>
</div>