@extends('layout')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded"
                             src="https://www.avensonline.org/blog/wp-content/uploads/2016/01/Emergency-Medicine.jpg"
                             style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4">Best Medical Care For Yourself and Your Family</h1>
                    </div>

                    <p>"HOPE" is a local charity, that cares about poor and needy people, we provide the maximum limit
                        of our capapilities in order to let you get
                        any type of midication you need! <br>
                        we are working to stimulate and guide the pharmaceutical industry to do more for people living
                        in low- and middle-income countries for more than ten years. <br>
                        We do this by defining the actions pharmaceutical companies can and should be taking to improve
                        access to medicine in low- and middle-income countries, and to curb antimicrobial resistance and
                        then analyse what they are actually doing.
                        In practice, that means talking with the experts in global health, in access to medicine, AMR
                        and the industry to define ambitious but achievable actions pharma companies can take. We then
                        benchmark companies against these expectations and make all of our research publicly and freely
                        available.
                        <br><br> To translate our findings into action, we engage with the companies we evaluate and
                        with organisations from the private sector, donors, NGOs, governments and the investor
                        community.
                        "HOPE" is an independent non-profit organisation. </p>
                    <div class="row g-3 pt-3" style="padding-left:8% ">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small></h6>
                            </div>
                        </div>
                        {{-- <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small></h6>
                            </div>
                        </div> --}}
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">Free<small class="d-block text-primary">Ambulance</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
