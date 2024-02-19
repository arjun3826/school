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
                        <a href="/becometeacher" class="dropdown-item">Become A Teachers</a>
                        <a href="/appointment" class="dropdown-item">Make Appointment</a>
                        <a href="/testimonial" class="dropdown-item active">Testimonial</a>
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
            <h1 class="display-2 text-white animated slideInDown mb-4">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Clients Say!</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                    eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet
                        dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Client Name</h3>
                            <span>Profession</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum
                        stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Client Name</h3>
                            <span>Profession</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum
                        stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Client Name</h3>
                            <span>Profession</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
