@extends('layouts.app')

@section('title')
    Home @parent
@endsection

@section('content')
    @include('widgets.alerts')

    <!-- banner starts -->
    @include('widgets.carousel')
    <!-- banner ends -->


    <!-- form main starts -->
    @include('widgets.searchForm')
    <!-- form main ends -->

    <!-- why us starts -->
    <section class="featured-us mt-4">
        <div class="container mt-4">
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
    <!-- why us ends -->

    <!-- about-us starts -->
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
                                        <img src="{{ asset('images/destination/destination7.jpg') }}"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/destination/destination5.jpg') }}"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/destination/destination6.jpg') }}"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/destination/destination3.jpg') }}"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('images/destination/destination4.jpg') }}"
                                            style="height: 150px; object-fit : contain;" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="about-image">
                            <img src="{{ asset('images/destination/destination12.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about-us ends -->

    <!-- Trending Starts -->
    {{-- @include('widgets.trending') --}}
    <!-- Trending Ends -->

    <!-- top destination starts -->
    @include('widgets.topDestination')
    <!-- top destination ends -->

    <!-- Discount action starts -->
    <section class="discount-action pt-0">
        <div class="container">
            <div class="call-banner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-6 p-0">
                        <div class="call-banner-inner text-center bg-navy">
                            <h4 class="white">NEW YEAR SPECIAL UPTO 25% OFF</h4>
                            <h2 class="white mb-4">SPEND THE BEST VACATION WITH US <br>The nights of Thailand</h2>
                            <a href="#" class="nir-btn">View Details <i class="fa fa-arrow-right white pl-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-0"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount action Ends -->

    <!-- Counter -->
    <section class="counter-main pt-0 pb-6">
        <div class="container">
            <div class="counter text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-users white mb-1"></i>
                            <h3 class="value mb-0 white">100</h3>
                            <h4 class="m-0 white">Happy Customers</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-plane white mb-1"></i>
                            <h3 class="value mb-0 white">50</h3>
                            <h4 class="m-0 white">Amazing Tours </h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-chart-bar white mb-1"></i>
                            <h3 class="value mb-0 white">3472</h3>
                            <h4 class="m-0 white">In Business</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-support white mb-1"></i>
                            <h3 class="value mb-0 white">523</h3>
                            <h4 class="m-0 white">Support Cases </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->

    <!-- Fav destination Starts -->
    @include('widgets.favDestination')
    <!-- Fav destination Ends -->

    <!-- top deal starts -->
    @include('widgets.topDeal')
    <!-- top deal ends -->

    <!-- testomonial start -->
    <section class="testimonial pb-10 pt-9" style="background-image: url(/images/bg/bg2.jpg);">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0 white">What <span>People Say About Us</span></h2>
                <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become
                    better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row review-slider1">
                <div class="col-sm-4">
                    <div class="testimonial-item">
                        <div class="testimonial-content mb-5">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description mb-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="author-title d-flex align-items-center">
                            <a href="#"><img src="/images/testimonial/img1.jpg" alt=""></a>
                            <div class="author-in ml-3">
                                <h5 class="m-0 white"> Elison Marks</h5>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="testimonial-item">
                        <div class="testimonial-content mb-5">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description mb-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="author-title d-flex align-items-center">
                            <a href="#"><img src="/images/testimonial/img2.jpg" alt=""></a>
                            <div class="author-in ml-3">
                                <h5 class="m-0 white">Jared Erondu</h5>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="testimonial-item">
                        <div class="testimonial-content mb-5">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description mb-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="author-title d-flex align-items-center">
                            <a href="#"><img src="/images/testimonial/img3.jpg" alt=""></a>
                            <div class="author-in ml-3">
                                <h5 class="m-0 white">Kelson Kelly</h5>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- testimonial ends -->

    <!-- Instagram starts -->
    <section class="insta-main p-0">
        <div class="insta-inner">
            <div class="follow-button">
                <h5 class="m-0"><a href="#" title="">Follow on Instagram</a></h5>
            </div>
            <div class="row attract-slider">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-3.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-4.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-5.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-1.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-7.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-8.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-2.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-6.jpg" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="/images/insta/ins-9.jpg" alt="insta"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram ends -->

    <!-- News Starts -->
    <section class="news pb-2 pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0"><span>Articles & Travel</span> Guidings</h2>
                <p class="mb-0 ">Travel has helped us to understand the meaning of life and it has helped us become better
                    people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="news-outer">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-xs-12 mb-4">
                        <div class="news-item overflow-hidden">
                            <div class="news-image">
                                <img src="/images/blog/blog1.jpg" alt="image">
                            </div>
                            <div class="news-list mt-2 border-b pb-2 mb-2">
                                <ul>
                                    <li><a href="single-right.html" class="pr-3"><i
                                                class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                    <li><a href="single-right.html" class="pr-3"><i
                                                class="fa fa-comment pink pr-1"></i> 3</a></li>
                                    <li><a href="single-right.html" class=""><i class="fa fa-tag pink pr-1"></i>
                                            Tour, Tourism, Travel</a></li>
                                </ul>
                            </div>
                            <div class="news-content mt-2">
                                <h4 class="pb-2 mb-2 border-b"><a href="single-right.html">The real voyage does not
                                        consist in seeking new landscapes</a></h4>
                                <p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked
                                    being court hopes. Farther so friends am to detract. Forbade concern do private be.
                                    Offending residence but men engrossed shy. <br><br>One of the programs is Save Our I
                                    have personally in many of the programs mentioned on this site.</p>

                                <div class="author-img">
                                    <img src="/images/reviewer/1.jpg" alt="Demo Image">
                                    <span>By - Jack Well Fardez</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="/images/blog/blog2.jpg" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">Mountains is always right
                                                destination.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="/images/blog/blog3.jpg" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Tourism</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">We have not all those who
                                                wander are lost.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="/images/blog/blog4.jpg" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Tour</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">Here Our's Life is either
                                                a daring adventure.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="/images/blog/blog5.jpg" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">Take only memories, leave
                                                only footprints.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Ends -->

    <!-- cta-horizon starts -->
    <div class="cta-horizon bg-blue pt-4 pb-2">
        <div class="container d-md-flex align-items-center justify-content-between">
            <h4 class="mb-2 white">Didn't find the service suite you! Need a custom service?</h4>
            <a href="#" class="nir-btn-black">Let's talk</a>
        </div>
    </div>
    <!-- cta-horizon Ends -->

@endsection

@section('footer_scripts')
    <script src="{{ asset('js/search.js') }}"></script>
@endsection
