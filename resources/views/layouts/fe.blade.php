<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Cinta Damai Group</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        @include('includes.style')
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->

        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        @include('includes.navbar')
        <!-- Navbar & Hero End -->
        @yield('content')
        
        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->
        
        <!-- Copyright Start -->

        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        @include('includes.script')
        @yield('script')
    </body>

</html>