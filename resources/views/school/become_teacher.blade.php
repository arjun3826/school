@extends('layout.app')
@section('main')
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="/" class="navbar-brand">
            <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About Us</a>
                <a href="/classes" class="nav-item nav-link">Classes</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="/facility" class="dropdown-item">School Facilities</a>
                        <a href="/teacher" class="dropdown-item">Popular Teachers</a>
                        <a href="/becometeacher" class="dropdown-item active">Become A Teachers</a>
                        <a href="/appointment" class="dropdown-item">Make Appointment</a>
                        <a href="/testimonial" class="dropdown-item">Testimonial</a>
                        <a href="/404" class="dropdown-item">404 Error</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Become A Teachers</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Become A Teachers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="img/call-to-action.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Become A Teacher</h1>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                diam amet diam et eos.
                                Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore
                                erat amet
                            </p>
                            <a class="btn btn-primary py-3 px-5" href="">Get Started Now<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
@endsection
