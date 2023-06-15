@extends('includes.app')

@section('content')

        <section class="banner overflow-hidden">
            <div class="slider">
                <div class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal"
                    style="cursor: grab;">
                    <div class="swiper-wrapper" style="transition-duration: 3000ms;">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                            data-swiper-slide-index="2"
                            style="width: 699px; transition-duration: 3000ms; opacity: 0; transform: translate3d(0px, 0px, 0px);">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url(images/slider/3.jpg)"></div>
                                <div class="swiper-content container">
                                    <h4 class="blue">Trip For Your Kids</h4>
                                    <h1 class="white mb-4"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
                                    <a href="#" class="per-btn">
                                        <span class="white">Discover</span>
                                        <i class="fa fa-arrow-right white"></i>
                                    </a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0"
                            style="width: 699px; transition-duration: 3000ms; opacity: 0; transform: translate3d(-699px, 0px, 0px);">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url(images/slider/1.jpg)"></div>
                                <div class="swiper-content container">
                                    <h4 class="blue">Amazing Places</h4>
                                    <h1 class="white mb-4">Explore Your Life Travel Where You Want</h1>
                                    <a href="#" class="per-btn">
                                        <span class="white">Discover</span>
                                        <i class="fa fa-arrow-right white"></i>
                                    </a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1"
                            style="width: 699px; transition-duration: 3000ms; opacity: 0; transform: translate3d(-1398px, 0px, 0px);">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url(images/slider/2.jpg)"></div>
                                <div class="swiper-content container">
                                    <h4 class="blue">Feel Free To Travel</h4>
                                    <h1 class="white mb-4">Make you Free to <span>travel</span> with us</h1>
                                    <a href="#" class="per-btn">
                                        <span class="white">Discover</span>
                                        <i class="fa fa-arrow-right white"></i>
                                    </a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                            data-swiper-slide-index="2"
                            style="width: 699px; transition-duration: 3000ms; opacity: 0; transform: translate3d(-2097px, 0px, 0px);">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url(images/slider/3.jpg)"></div>
                                <div class="swiper-content container">
                                    <h4 class="blue">Trip For Your Kids</h4>
                                    <h1 class="white mb-4"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
                                    <a href="#" class="per-btn">
                                        <span class="white">Discover</span>
                                        <i class="fa fa-arrow-right white"></i>
                                    </a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0"
                            style="width: 699px; transition-duration: 3000ms; opacity: 1; transform: translate3d(-2796px, 0px, 0px);">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url(images/slider/1.jpg)"></div>
                                <div class="swiper-content container">
                                    <h4 class="blue">Amazing Places</h4>
                                    <h1 class="white mb-4">Explore Your Life Travel Where You Want</h1>
                                    <a href="#" class="per-btn">
                                        <span class="white">Discover</span>
                                        <i class="fa fa-arrow-right white"></i>
                                    </a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>


        <div class="form-main">
            <div class="container-fluid">
                <div class="form-content">
                    <h3 class="form-title text-center d-inline white">Find a Places</h3>
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-map-marker"></i>
                                <select class="niceSelect" style="display: none;">
                                    <option value="1">Your Destination</option>
                                    <option value="2">Argentina</option>
                                    <option value="3">Belgium</option>
                                    <option value="4">Canada</option>
                                    <option value="5">Denmark</option>
                                </select>
                                <div class="nice-select niceSelect" tabindex="0"><span class="current">Your
                                        Destination</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Your Destination</li>
                                        <li data-value="2" class="option">Argentina</li>
                                        <li data-value="3" class="option">Belgium</li>
                                        <li data-value="4" class="option">Canada</li>
                                        <li data-value="5" class="option">Denmark</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-calendar"></i>
                                <input id="date-range0" type="text" placeholder="Depart Date">
                            </div>
                        </div>
                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-calendar"></i>
                                <input id="date-range1" type="text" placeholder="Return Date">
                            </div>
                        </div>
                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-clock"></i>
                                <select class="niceSelect" style="display: none;">
                                    <option value="1">Total Duration</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <div class="nice-select niceSelect" tabindex="0"><span class="current">Total
                                        Duration</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Total Duration</li>
                                        <li data-value="2" class="option">2</li>
                                        <li data-value="3" class="option">3</li>
                                        <li data-value="4" class="option">4</li>
                                        <li data-value="5" class="option">5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-0 w-100">
                            <a href="#" class="nir-btn"><i class="fa fa-search"></i> Check Availability</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="featured-us pb-0">
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
                                    <p class="mb-0">With 500+ suppliers and the purchasing power of 300 million members
                                    </p>
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
                                    <p class="mb-0">1,200,000 hotels in more than 200 countries and regions &amp; flights
                                        to over 5,000 citites.</p>
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
                                <h4 class="mb-1 blue font-weight-normal">About Yatriiworld</h4>
                                <h2>We're truely dedicated to make your travel experience best</h2>
                                <p class="mb-3">Top Tour Operators and Travel Agency. We offering in total 793 tours and
                                    holidays throughout the world. Combined we have received 1532 customer reviews and an
                                    average rating of 5 out of 5 stars. <br><br>Travel has helped us to understand the
                                    meaning of life and it has helped us become better people. Each time we travel, we see
                                    the world with new eyes.</p>
                                <div class="about-imagelist">
                                    <ul class="d-flex justify-content-between">
                                        <li class="mr-2">
                                            <img src="images/destination/destination7.jpg" alt="">
                                        </li>
                                        <li class="mr-2">
                                            <img src="images/destination/destination5.jpg" alt="">
                                        </li>
                                        <li class="mr-2">
                                            <img src="images/destination/destination6.jpg" alt="">
                                        </li>
                                        <li class="mr-2">
                                            <img src="images/destination/destination3.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="images/destination/destination4.jpg" alt="">
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


        <section class="trending pb-6 pt-5">
            <div class="container">
                <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                    <h2 class="m-0">Perfect <span>Tour Packages</span></h2>
                    <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become
                        better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="trend-box">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/trending/trending1.jpg" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i>
                                            Thailand</h6>
                                        <h4><a href="#">Stonehenge, Windsor Castle, and Bath from London</a></h4>
                                        <div class="rating-main d-flex align-items-center">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ml-2">38 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="trend-last-main">
                                        <p class="mb-0 trend-para">A wonderful little cottage right on the seashore -
                                            perfect for exploring.</p>
                                        <div class="trend-last d-flex align-items-center justify-content-between">
                                            <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3
                                                days &amp; 2 night</p>
                                            <div class="trend-price">
                                                <p class="price white mb-0">From <span>$350.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/trending/trending2.jpg" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany
                                        </h6>
                                        <h4><a href="#">Here We Bosphorus and Black Sea Cruise from Istanbul</a>
                                        </h4>
                                        <div class="rating-main d-flex align-items-center">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ml-2">38 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="trend-last-main">
                                        <p class="mb-0 trend-para">A wonderful little cottage right on the seashore -
                                            perfect for exploring.</p>
                                        <div class="trend-last d-flex align-items-center justify-content-between">
                                            <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3
                                                days &amp; 2 night</p>
                                            <div class="trend-price">
                                                <p class="price white mb-0">From <span>$350.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/trending/trending3.jpg" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Denmark
                                        </h6>
                                        <h4><a href="#">NYC One World Observatory Skip-the-Line Ticket</a></h4>
                                        <div class="rating-main d-flex align-items-center">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ml-2">38 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="trend-last-main">
                                        <p class="mb-0 trend-para">A wonderful little cottage right on the seashore -
                                            perfect for exploring.</p>
                                        <div class="trend-last d-flex align-items-center justify-content-between">
                                            <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3
                                                days &amp; 2 night</p>
                                            <div class="trend-price">
                                                <p class="price white mb-0">From <span>$350.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/trending/trending4.jpg" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Japan
                                        </h6>
                                        <h4><a href="#">Stonehenge, Windsor Castle, and Bath from London</a></h4>
                                        <div class="rating-main d-flex align-items-center">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ml-2">38 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="trend-last-main">
                                        <p class="mb-0 trend-para">A wonderful little cottage right on the seashore -
                                            perfect for exploring.</p>
                                        <div class="trend-last d-flex align-items-center justify-content-between">
                                            <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3
                                                days &amp; 2 night</p>
                                            <div class="trend-price">
                                                <p class="price white mb-0">From <span>$350.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/trending/trending5.jpg" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Italy
                                        </h6>
                                        <h4><a href="#">Here We Bosphorus and Black Sea Cruise from Istanbul</a>
                                        </h4>
                                        <div class="rating-main d-flex align-items-center">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ml-2">38 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="trend-last-main">
                                        <p class="mb-0 trend-para">A wonderful little cottage right on the seashore -
                                            perfect for exploring.</p>
                                        <div class="trend-last d-flex align-items-center justify-content-between">
                                            <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3
                                                days &amp; 2 night</p>
                                            <div class="trend-price">
                                                <p class="price white mb-0">From <span>$350.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="images/trending/trending6.jpg" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Turkey
                                        </h6>
                                        <h4><a href="#">NYC One World Observatory Skip-the-Line Ticket</a></h4>
                                        <div class="rating-main d-flex align-items-center">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ml-2">38 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="trend-last-main">
                                        <p class="mb-0 trend-para">A wonderful little cottage right on the seashore -
                                            perfect for exploring.</p>
                                        <div class="trend-last d-flex align-items-center justify-content-between">
                                            <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3
                                                days &amp; 2 night</p>
                                            <div class="trend-price">
                                                <p class="price white mb-0">From <span>$350.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="top-destination overflow-hidden pb-9">
            <div class="container">
                <div class="desti-inner">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4 col-md-6 p-1">
                            <div class="desti-title text-center">
                                <h2 class="white">Travel <br>Best Holidays Trips <br>In The World</h2>
                                <p class="white mb-0">Lorem Ipsum is simply dummy text the printing and typesetting
                                    industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-1">
                            <div class="desti-image">
                                <img src="images/destination/destination3.jpg" alt="desti">
                                <div class="desti-content">
                                    <div class="rating mb-1">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h4 class="white mb-0">New York Tour</h4>
                                </div>
                                <div class="desti-overlay">
                                    <a href="#" class="nir-btn">
                                        <span class="white">Book Now</span>
                                        <i class="fa fa-arrow-right white pl-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-1">
                            <div class="desti-image">
                                <img src="images/destination/destination4.jpg" alt="desti">
                                <div class="desti-content">
                                    <div class="rating mb-1">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h4 class="white mb-0">Armania Tour</h4>
                                </div>
                                <div class="desti-overlay">
                                    <a href="#" class="nir-btn">
                                        <span class="white">Book Now</span>
                                        <i class="fa fa-arrow-right white pl-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-1">
                            <div class="desti-image">
                                <img src="images/destination/destination5.jpg" alt="desti">
                                <div class="desti-content">
                                    <div class="rating mb-1">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h4 class="white mb-0">Manchester Tour</h4>
                                </div>
                                <div class="desti-overlay">
                                    <a href="#" class="nir-btn">
                                        <span class="white">Book Now</span>
                                        <i class="fa fa-arrow-right white pl-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-1">
                            <div class="desti-image">
                                <img src="images/destination/destination7.jpg" alt="desti">
                                <div class="desti-content">
                                    <div class="rating mb-1">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h4 class="white mb-0">kathmandu Tour</h4>
                                </div>
                                <div class="desti-overlay">
                                    <a href="#" class="nir-btn">
                                        <span class="white">Book Now</span>
                                        <i class="fa fa-arrow-right white pl-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-1">
                            <div class="desti-image">
                                <img src="images/destination/destination8.jpg" alt="desti">
                                <div class="desti-content">
                                    <div class="rating mb-1">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h4 class="white mb-0">Tokyo Tour</h4>
                                </div>
                                <div class="desti-overlay">
                                    <a href="#" class="nir-btn">
                                        <span class="white">Book Now</span>
                                        <i class="fa fa-arrow-right white pl-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 p-1">
                            <div class="desti-image">
                                <img src="images/destination/destination9.jpg" alt="desti">
                                <div class="desti-content">
                                    <div class="rating mb-1">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <h4 class="white mb-0">Norwich Tour</h4>
                                </div>
                                <div class="desti-overlay">
                                    <a href="#" class="nir-btn">
                                        <span class="white">Book Now</span>
                                        <i class="fa fa-arrow-right white pl-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js"><canvas class="particles-js-canvas-el" width="699" height="3472"
                    style="width: 100%; height: 100%;"></canvas></div>
        </section>


        <section class="discount-action pt-0">
            <div class="container">
                <div class="call-banner">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="call-banner-inner text-center bg-navy">
                                <h4 class="white">SUMMER SPECIAL UPTO 25% OFF</h4>
                                <h2 class="white mb-4">SPEND THE BEST VACATION WITH US <br>The nights of Thailand</h2>
                                <a href="#" class="nir-btn">View Details <i
                                        class="fa fa-arrow-right white pl-1"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 p-0"></div>
                    </div>
                </div>
            </div>
        </section>


        <section class="counter-main pt-0 pb-6">
            <div class="container">
                <div class="counter text-center">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="counter-item bg-pink">
                                <i class="fa fa-users white mb-1"></i>
                                <h3 class="value mb-0 white">75</h3>
                                <h4 class="m-0 white">Happy Customers</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="counter-item bg-pink">
                                <i class="fa fa-plane white mb-1"></i>
                                <h3 class="value mb-0 white">37</h3>
                                <h4 class="m-0 white">Amazing Tours </h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12mb-4">
                            <div class="counter-item bg-pink">
                                <i class="fa fa-chart-bar white mb-1"></i>
                                <h3 class="value mb-0 white">2604</h3>
                                <h4 class="m-0 white">In Business</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="counter-item bg-pink">
                                <i class="fa fa-support white mb-1"></i>
                                <h3 class="value mb-0 white">392</h3>
                                <h4 class="m-0 white">Support Cases </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="trending destination pb-6 pt-9" style="background-image: url(images/bg/bg4.jpg);">
            <div class="container">
                <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
                    <h2 class="m-0 white">Find Your <strong>Favourite Destination</strong></h2>
                    <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us
                        become better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="trend-box">
                    <div class="price-navtab text-center mb-4">
                        <ul class="nav nav-tabs">
                            <li class=""><a data-toggle="tab" href="#historical"
                                    aria-expanded="false">Historical</a></li>
                            <li class=""><a data-toggle="tab" href="#weekend"
                                    aria-expanded="false">Weekend</a></li>
                            <li class=""><a data-toggle="tab" href="#holidays"
                                    aria-expanded="false">Holidays</a></li>
                            <li class="active"><a data-toggle="tab" href="#special" aria-expanded="true">Special
                                    Tour</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="historical" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending8.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Nepal Special Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending11.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Canada New Year Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/2.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-12 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending12.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">25 Reviews</span>
                                                </div>
                                                <h4><a href="#">America Christmas Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="weekend" class="tab-pane fade">
                            <div class="row">
                                <div class=" col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending14.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Nepal Weekend Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending13.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Canada Weekend Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/2.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-12 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending7.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">25 Reviews</span>
                                                </div>
                                                <h4><a href="#">America Weekend Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="holidays" class="tab-pane fade">
                            <div class="row">
                                <div class=" col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending2.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Nepal Holidays Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending3.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Canada Holidays Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/2.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-12 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending4.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">25 Reviews</span>
                                                </div>
                                                <h4><a href="#">America Holidays Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="special" class="tab-pane fade active in">
                            <div class="row">
                                <div class=" col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending6.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Nepal Special Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending5.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4><a href="#">Canada Special Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/2.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-12 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="images/trending/trending9.jpg" alt="image">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                    <span class="ml-2">25 Reviews</span>
                                                </div>
                                                <h4><a href="#">America Special Tour</a></h4>
                                                <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                        class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the
                                                    seashore - perfect for exploring.</p>
                                                <div class="trend-last d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 white d-flex align-items-center"><img
                                                            src="images/reviewer/1.jpg" class="d-author mr-2"
                                                            alt=""> Thu Astudillo</p>
                                                    <div class="trend-price">
                                                        <p class="price white mb-0"><a href="#"><i
                                                                    class="flaticon-like white"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dot-overlay"></div>
        </section>


        <section class="top-deals bg-grey pt-9">
            <div class="container">
                <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                    <h2 class="m-0">Today's <span>Top Deal</span></h2>
                    <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become
                        better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row team-slider slick-initialized slick-slider"><button class="slick-prev slick-arrow"
                        aria-label="Previous" type="button" style="display: inline-block;">Previous</button>




                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 4860px; transform: translate3d(-540px, 0px, 0px);">
                            <div class="col-md-4 slider-item slick-slide slick-cloned" style="width: 540px;"
                                data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal4.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany
                                    </h6>
                                    <h4><a href="#" tabindex="-1">Earning Asiana Club Miles</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 slider-item slick-slide slick-current slick-active"
                                style="width: 540px;" data-slick-index="0" aria-hidden="false">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal1.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> United
                                        Kingdom</h6>
                                    <h4><a href="#" tabindex="0">Earning Asiana Club Miles</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 slider-item slick-slide" style="width: 540px;" data-slick-index="1"
                                aria-hidden="true" tabindex="-1">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal2.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Thailand
                                    </h6>
                                    <h4><a href="#" tabindex="-1">Save big on hotels!</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 slider-item slick-slide" style="width: 540px;" data-slick-index="2"
                                aria-hidden="true" tabindex="-1">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal3.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> South Korea
                                    </h6>
                                    <h4><a href="#" tabindex="-1">Experience Europe Your Way</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 slider-item slick-slide" style="width: 540px;" data-slick-index="3"
                                aria-hidden="true" tabindex="-1">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal4.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany
                                    </h6>
                                    <h4><a href="#" tabindex="-1">Earning Asiana Club Miles</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 slider-item slick-slide slick-cloned" tabindex="-1"
                                style="width: 540px;" data-slick-index="4" id="" aria-hidden="true">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal1.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> United
                                        Kingdom</h6>
                                    <h4><a href="#" tabindex="-1">Earning Asiana Club Miles</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 slider-item slick-slide slick-cloned" tabindex="-1"
                                style="width: 540px;" data-slick-index="5" id="" aria-hidden="true">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal2.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Thailand
                                    </h6>
                                    <h4><a href="#" tabindex="-1">Save big on hotels!</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 slider-item slick-slide slick-cloned" tabindex="-1"
                                style="width: 540px;" data-slick-index="6" id="" aria-hidden="true">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal3.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> South Korea
                                    </h6>
                                    <h4><a href="#" tabindex="-1">Experience Europe Your Way</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 slider-item slick-slide slick-cloned" style="width: 540px;"
                                data-slick-index="7" id="" aria-hidden="true" tabindex="-1">
                                <div class="slider-image">
                                    <img src="images/new-deal/deal4.jpg" alt="image">
                                </div>
                                <div class="slider-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany
                                    </h6>
                                    <h4><a href="#" tabindex="-1">Earning Asiana Club Miles</a></h4>
                                    <p>With upto 30% Off, experience Europe your way!</p>
                                    <div class="deal-price">
                                        <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button class="slick-next slick-arrow" aria-label="Next" type="button"
                        style="display: inline-block;">Next</button>
                </div>
            </div>
        </section>


        <section class="testimonial pb-10 pt-9" style="background-image: url(images/bg/bg2.jpg);">
            <div class="container">
                <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                    <h2 class="m-0 white">What <span>People Say About Us</span></h2>
                    <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us
                        become better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row review-slider1 slick-initialized slick-slider">



                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 3780px; transform: translate3d(-1080px, 0px, 0px);">
                            <div class="col-sm-4 slick-slide slick-cloned" style="width: 540px;" data-slick-index="-1"
                                id="" aria-hidden="true" tabindex="-1">
                                <div class="testimonial-item">
                                    <div class="testimonial-content mb-5">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="author-title d-flex align-items-center">
                                        <a href="#" tabindex="-1"><img src="images/testimonial/img3.jpg"
                                                alt=""></a>
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
                            <div class="col-sm-4 slick-slide" style="width: 540px;" data-slick-index="0"
                                aria-hidden="true" tabindex="-1">
                                <div class="testimonial-item">
                                    <div class="testimonial-content mb-5">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="author-title d-flex align-items-center">
                                        <a href="#" tabindex="-1"><img src="images/testimonial/img1.jpg"
                                                alt=""></a>
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
                            <div class="col-sm-4 slick-slide slick-current slick-active" style="width: 540px;"
                                data-slick-index="1" aria-hidden="false">
                                <div class="testimonial-item">
                                    <div class="testimonial-content mb-5">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="author-title d-flex align-items-center">
                                        <a href="#" tabindex="0"><img src="images/testimonial/img2.jpg"
                                                alt=""></a>
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
                            <div class="col-sm-4 slick-slide" style="width: 540px;" data-slick-index="2"
                                aria-hidden="true" tabindex="-1">
                                <div class="testimonial-item">
                                    <div class="testimonial-content mb-5">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="author-title d-flex align-items-center">
                                        <a href="#" tabindex="-1"><img src="images/testimonial/img3.jpg"
                                                alt=""></a>
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
                            <div class="col-sm-4 slick-slide slick-cloned" tabindex="-1" style="width: 540px;"
                                data-slick-index="3" id="" aria-hidden="true">
                                <div class="testimonial-item">
                                    <div class="testimonial-content mb-5">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="author-title d-flex align-items-center">
                                        <a href="#" tabindex="-1"><img src="images/testimonial/img1.jpg"
                                                alt=""></a>
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
                            <div class="col-sm-4 slick-slide slick-cloned" tabindex="-1" style="width: 540px;"
                                data-slick-index="4" id="" aria-hidden="true">
                                <div class="testimonial-item">
                                    <div class="testimonial-content mb-5">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="author-title d-flex align-items-center">
                                        <a href="#" tabindex="-1"><img src="images/testimonial/img2.jpg"
                                                alt=""></a>
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
                            <div class="col-sm-4 slick-slide slick-cloned" style="width: 540px;" data-slick-index="5"
                                id="" aria-hidden="true" tabindex="-1">
                                <div class="testimonial-item">
                                    <div class="testimonial-content mb-5">
                                        <div class="testimonial-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </div>
                                        <p class="description mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                        </p>
                                    </div>
                                    <div class="author-title d-flex align-items-center">
                                        <a href="#" tabindex="-1"><img src="images/testimonial/img3.jpg"
                                                alt=""></a>
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
                </div>
            </div>
            <div class="overlay"></div>
        </section>


        <section class="insta-main p-0">
            <div class="insta-inner">
                <div class="follow-button">
                    <h5 class="m-0"><a href="#" title="">Follow on Instagram</a></h5>
                </div>
                <div class="row attract-slider slick-initialized slick-slider">
                    <div class="slick-list">
                        <div class="slick-track"
                            style="opacity: 1; width: 5103px; transform: translate3d(-729px, 0px, 0px);">
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                data-slick-index="-3" id="" aria-hidden="true" tabindex="-1">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-2.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                tabindex="-1" data-slick-index="-2" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-6.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                tabindex="-1" data-slick-index="-1" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-9.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-current slick-active"
                                style="width: 243px;" data-slick-index="0" aria-hidden="false">
                                <div class="insta-image">
                                    <a href="#" tabindex="0"><img src="images/insta/ins-3.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-active" style="width: 243px;"
                                data-slick-index="1" aria-hidden="false">
                                <div class="insta-image">
                                    <a href="#" tabindex="0"><img src="images/insta/ins-4.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-active" style="width: 243px;"
                                data-slick-index="2" aria-hidden="false">
                                <div class="insta-image">
                                    <a href="#" tabindex="0"><img src="images/insta/ins-5.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide" tabindex="-1" style="width: 243px;"
                                data-slick-index="3" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-1.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide" style="width: 243px;" tabindex="-1"
                                data-slick-index="4" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-7.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide" style="width: 243px;"
                                data-slick-index="5" aria-hidden="true" tabindex="-1">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-8.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide" style="width: 243px;"
                                data-slick-index="6" aria-hidden="true" tabindex="-1">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-2.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide" style="width: 243px;"
                                data-slick-index="7" aria-hidden="true" tabindex="-1">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-6.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide" style="width: 243px;"
                                data-slick-index="8" aria-hidden="true" tabindex="-1">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-9.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" tabindex="-1"
                                style="width: 243px;" data-slick-index="9" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-3.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" tabindex="-1"
                                style="width: 243px;" data-slick-index="10" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-4.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" tabindex="-1"
                                style="width: 243px;" data-slick-index="11" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-5.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" tabindex="-1"
                                style="width: 243px;" data-slick-index="12" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-1.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                tabindex="-1" data-slick-index="13" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-7.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                data-slick-index="14" id="" aria-hidden="true" tabindex="-1">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-8.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                data-slick-index="15" id="" aria-hidden="true" tabindex="-1">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-2.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                tabindex="-1" data-slick-index="16" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-6.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 slick-slide slick-cloned" style="width: 243px;"
                                tabindex="-1" data-slick-index="17" id="" aria-hidden="true">
                                <div class="insta-image">
                                    <a href="#" tabindex="-1"><img src="images/insta/ins-9.jpg"
                                            alt="insta"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="news pb-2 pt-9">
            <div class="container">
                <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                    <h2 class="m-0"><span>Articles &amp; Travel</span> Guidings</h2>
                    <p class="mb-0 ">Travel has helped us to understand the meaning of life and it has helped us become
                        better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="news-outer">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-xs-12 mb-4">
                            <div class="news-item overflow-hidden">
                                <div class="news-image">
                                    <img src="images/blog/blog1.jpg" alt="image">
                                </div>
                                <div class="news-list mt-2 border-b pb-2 mb-2">
                                    <ul>
                                        <li><a href="single-right.html" class="pr-3"><i
                                                    class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                        <li><a href="single-right.html" class="pr-3"><i
                                                    class="fa fa-comment pink pr-1"></i> 3</a></li>
                                        <li><a href="single-right.html" class=""><i
                                                    class="fa fa-tag pink pr-1"></i> Tour, Tourism, Travel</a></li>
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
                                        <img src="images/reviewer/1.jpg" alt="Demo Image">
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
                                            <img src="images/blog/blog2.jpg" alt="image">
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
                                            <h4 class="bordernone mb-0"><a href="single-right.html">Mountains is always
                                                    right destination.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                    <div class="news-item overflow-hidden">
                                        <div class="news-image">
                                            <img src="images/blog/blog3.jpg" alt="image">
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
                                            <h4 class="bordernone mb-0"><a href="single-right.html">We have not all
                                                    those who wander are lost.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                    <div class="news-item overflow-hidden">
                                        <div class="news-image">
                                            <img src="images/blog/blog4.jpg" alt="image">
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
                                            <h4 class="bordernone mb-0"><a href="single-right.html">Here Our's Life is
                                                    either a daring adventure.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                    <div class="news-item overflow-hidden">
                                        <div class="news-image">
                                            <img src="images/blog/blog5.jpg" alt="image">
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
                                            <h4 class="bordernone mb-0"><a href="single-right.html">Take only memories,
                                                    leave only footprints.</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="cta-horizon bg-blue pt-4 pb-2">
            <div class="container d-md-flex align-items-center justify-content-between">
                <h4 class="mb-2 white">Didn't find the service suite you! Need a custom service?</h4>
                <a href="#" class="nir-btn-black">Let's talk</a>
            </div>
        </div>

@endsection
