<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ route('pages.index') }}" class="navbar-brand p-0">
                <img src="{{asset('template_fe/img/cindai.png')}}" alt="Logo">
                <!-- <h1 class="display-6 text-primary"></i></i>Cinta Damai Group</h1> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{ route('pages.index') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('pages.about') }}" class="nav-item nav-link">About</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://suzukicintadamai.co.id/" class="dropdown-item">Suzuki</a>
                            <a href="https://hyundaimandiri.com/" class="dropdown-item">Hyundai</a>
                            <a href="https://honda-eiyu.com/" class="dropdown-item">Honda</a>
                            <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a> -->
                        </div>
                    </div>
                    
                    <a href="{{ route('pages.services') }}" class="nav-item nav-link">Services</a>
                    {{-- <a href="blog.html" class="nav-item nav-link">Blog</a> --}}
                </div>
                <a href="{{ route('pages.contact') }}" class="btn btn-primary rounded-pill py-2 px-4">Contact</a>
            </div>
        </nav>
    </div>
    </div>