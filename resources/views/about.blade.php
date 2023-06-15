@extends('includes.app')

@section('content')
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg7.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>

    <section class="featured-us pb-0">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="featured-us-box pt-9">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                            <div class="featured-us-icon">
                                <i class="flaticon-price pink"></i>
                            </div>
                            <div class="featured-us-content">
                                <h4 class="mb-1"><a href="#">Competetive Pricing</a></h4>
                                <p class="mb-0">With 500+ suppliers and the purchasing power of 300 million members</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                            <div class="featured-us-icon">
                                <i class="flaticon-quality pink"></i>
                            </div>
                            <div class="featured-us-content">
                                <h4 class="mb-1"><a href="#">Award Winning Service</a></h4>
                                <p class="mb-0">Fabulous Travel worry free knowing that we're here if you need us, 24
                                    hours a day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                            <div class="featured-us-icon">
                                <i class="flaticon-global pink"></i>
                            </div>
                            <div class="featured-us-content">
                                <h4 class="mb-1"><a href="#">Worldwide Coverage</a></h4>
                                <p class="mb-0">1,200,000 hotels in more than 200 countries and regions & flights to over
                                    5,000 citites.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us pb-0 pt-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="about-content">
                            <h4 class="mb-1 blue font-weight-normal">About HBS Travel</h4>
                            <h2>We're truely dedicated to make your travel experience best</h2>
                            <p class="mb-3">Top Tour Operators and Travel Agency. We offering in total 793 tours and
                                holidays throughout the world. Combined we have received 1532 customer reviews and an
                                average rating of 5 out of 5 stars. <br><br>Travel has helped us to understand the meaning
                                of life and it has helped us become better people. Each time we travel, we see the world
                                with new eyes.</p>
                            <div class="about-imagelist">
                                <ul class="d-flex justify-content-between">
                                    <li class="mr-2">
                                        <img src="images/destination/destination7.jpg"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="images/destination/destination5.jpg"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="images/destination/destination6.jpg"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="images/destination/destination3.jpg"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li>
                                        <img src="images/destination/destination4.jpg"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="about-image">
                            <img src="images/destination/destination12.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="about-us1 bg-grey pb-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-content">
                            <h2 class="">Why Choose Us</h2>
                            <p class="mb-2">Top Tour Operators and Travel Agency. We offering in total 793 tours and
                                holidays throughout the world. Combined we have received 1532 customer reviews and an
                                average rating of 5 out of 5 stars. <br>Travel has helped us to understand the meaning
                                of life and it has helped us become better people. Each time we travel, we see the world
                                with new eyes.</p>
                            <div class="about-featured mb-0">
                                <ul>
                                    <li>Safety Travel System</li>
                                    <li>Budget-Friendly Tour</li>
                                    <li>Expert Trip Planning</li>
                                    <li>Fast Communication</li>
                                    <li>Right Solution &amp; Guide</li>
                                    <li>24/7 Customer Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image-main">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mt-4 mb-4">
                                    <img src="images/new-deal/deal3.jpg" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="images/new-deal/deal5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-us pt-4 border-t">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-call pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Advice &amp; Support</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24
                                        hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-global pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Air Ticketing</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24
                                        hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-building pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Hotel Services</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24
                                        hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-location-pin pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Tour Packages</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24
                                        hours a day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="counter-main pb-6" style="background-image: url(images/bg/bg4.jpg)">
        <div class="container">
            <div class="counter text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-users white bg-navy mb-1"></i>
                            <h3 class="value mb-0 navy">100</h3>
                            <h4 class="m-0">Happy Customers</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-plane mb-1 white bg-navy"></i>
                            <h3 class="value mb-0 navy">50</h3>
                            <h4 class="m-0">Amazing Tours </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-chart-bar  white bg-navy mb-1"></i>
                            <h3 class="value mb-0 navy">3472</h3>
                            <h4 class="m-0">In Business</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="counter-item bg-lgrey">
                            <i class="fa fa-support  white bg-navy mb-1"></i>
                            <h3 class="value mb-0 navy">523</h3>
                            <h4 class="m-0">Support Cases </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>


    <div class="content-line bg-navy pb-6 pt-6">
        <div class="container">
            <div class="content-line-inner">
                <div class="row d-md-flex align-items-center justify-content-between">
                    <div class="col-lg-9 col-md-9">
                        <p class="mb-0 white h4">
                            It’s Time For a New Adventure! Don’t Wait Any Longer. Contact us!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="nir-btn">Fine More Destination</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
