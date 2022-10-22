@extends('layout')


@section('content')
    <!-- Hero Start -->
    <section>
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"
                            style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Medinova</h5>
                        <h1 class="display-1 text-white mb-md-4">Best Healthcare Solution In Your City</h1>
                        <div class="pt-2">
                            <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
                            <a href=""
                                class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->


    {{-- Services Start --}}
    <section>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                    <h1 class="display-4">Excellent Medical Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-user-md text-white"></i>
                            </div>
                            <h4 class="mb-3">Children's Services</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                                elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href='/appointment'>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-procedures text-white"></i>
                            </div>
                            <h4 class="mb-3">Operation &amp; Surgery</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                                elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="/appointment">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-stethoscope text-white"></i>
                            </div>
                            <h4 class="mb-3">Cancer Care</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                                elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="/appointment">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-heart text-white"></i>
                            </div>
                            <h4 class="mb-3">Spiritual Care Services</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                                elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="appointment">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-pills text-white"></i>
                            </div>
                            <h4 class="mb-3">Medicine &amp; Pharmacy</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                                elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="appointment">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="fa fa-2x fa-microscope text-white"></i>
                            </div>
                            <h4 class="mb-3">Laboratory Services</h4>
                            <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo
                                elitr dolor amet sit</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="/appointment'">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Services Section End --}}

    {{-- Doctors Section Start --}}
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                <h1 class="display-4">Qualified Healthcare Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative owl-loaded owl-drag">
                <div class="owl-stage-main">
                    <div class="owl-stage"
                        style="transform: translate3d(-2964px, 0px, 0px); transition: all 1s ease 0s; width: 5187px;">


                        @foreach ($doctors as $key => $doctor)
                            <div class="owl-item {{ $key == 0 ? ' active' : '' }}"
                                style="width: 696px; margin-right: 45px;">
                                <div class="team-item">
                                    <div class="row g-0 bg-light rounded overflow-hidden">
                                        <div class="col-12 col-sm-5 h-100">
                                            <img class="img-fluid h-100" src="{{ $doctor->image }}"
                                                style="object-fit: cover;">
                                        </div>
                                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                            <div class="mt-auto p-4">
                                                <h3>{{ $doctor->name }}</h3>
                                                <h6 class="fw-normal fst-italic text-primary mb-4">
                                                    {{ $doctor->certificate }}</h6>
                                            </div>
                                            <div class="d-flex mt-auto border-top p-4">
                                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3"
                                                    href="#"><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3"
                                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle"
                                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
                <div class="owl-nav">
                    <div class="owl-prev"><i class="bi bi-arrow-left"></i></div>
                    <div class="owl-next"><i class="bi bi-arrow-right"></i></div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
    {{-- Doctors Section Ends --}}
    <hr>

    {{-- Testo Section Start --}}

    {{-- <section class="gradient-custom">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
                    <h1 class="display-4">Patients Say About Our Services</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="col-md-12">
                            <div class="text-center mb-4 pb-2">
                                <i class="fas fa-quote-left fa-3x text-white"></i>
                            </div>

                            <div class="card">
                                <div class="card-body px-4 py-5">
                                    <!-- Carousel wrapper -->
                                    <div id="carouselDarkVariant" class="carousel slide carousel-dark"
                                        data-mdb-ride="carousel">
                                        <!-- Indicators -->
                                        <div class="carousel-indicators mb-0">
                                            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="0"
                                                class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="1"
                                                aria-label="Slide 1"></button>
                                            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="2"
                                                aria-label="Slide 1"></button>
                                        </div>

                                        <!-- Inner -->
                                        <div class="carousel-inner pb-5">
                                            <!-- Single item -->
                                            @foreach ($testimonialss as $key => $testimonial)
                                                <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-10 col-xl-8">
                                                            <div class="row">
                                                                <div class="col-lg-4 d-flex justify-content-center">
                                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                                                        class="rounded-circle shadow-1 mb-4 mb-lg-0"
                                                                        alt="woman avatar" width="150"
                                                                        height="150" />
                                                                </div>
                                                                <div
                                                                    class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                                    <h4 class="mb-4">{{ $testimonial->name }}</h4>
                                                                    </h4>
                                                                    <p class="mb-0 pb-3">
                                                                        {{ $testimonial->message }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <!-- Inner -->

                                            <!-- Controls -->
                                            <button class="carousel-control-prev" type="button"
                                                data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <!-- Carousel wrapper -->
                                    </div>
                                </div>

                                <div class="text-center mt-4 pt-2">
                                    <i class="fas fa-quote-right fa-3x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}
    {{-- Testo Section  End --}}
@endsection
