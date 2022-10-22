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

                        @foreach ($doctors as $doctor)
                            <div class="owl-item active" style="width: 696px; margin-right: 45px;">
                                <div class="team-item">
                                    <div class="row g-0 bg-light rounded overflow-hidden">
                                        <div class="col-12 col-sm-5 h-100">
                                            <img class="img-fluid h-100" src="{{ $doctor['image'] }}"
                                                style="object-fit: cover;">
                                        </div>
                                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                            <div class="mt-auto p-4">
                                                <h3>{{ $doctor['name'] }}</h3>
                                                <h6 class="fw-normal fst-italic text-primary mb-4">
                                                    {{ $doctor['certificate'] }}</h6>
                                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna
                                                    rebum
                                                    clita rebum
                                                    dolor</p>
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
                    {{-- <div class="owl-item cloned" style="width: 696px; margin-right: 45px;">
                        <div class="team-item">
                            <div class="row g-0 bg-light rounded overflow-hidden">
                                <div class="col-12 col-sm-5 h-100">
                                    <img class="img-fluid h-100" src="img/team-2.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                    <div class="mt-auto p-4">
                                        <h3>Doctor Name</h3>
                                        <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                        <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita
                                            rebum
                                            dolor</p>
                                    </div>
                                    <div class="d-flex mt-auto border-top p-4">
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3"
                                            href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3"
                                            href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        --}}

                </div>
                <div class="owl-nav">
                    <div class="owl-prev"><i class="bi bi-arrow-left"></i></div>
                    <div class="owl-next"><i class="bi bi-arrow-right"></i></div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
@endsection
