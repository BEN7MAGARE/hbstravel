<section class="trending pb-6 pt-5">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Perfect <span>Tour Packages</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="trend-box">
                <div class="row">
                    @foreach ($hotels as $hotel)
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    @if (count($hotel->images) > 0)
                                    <img style="height: 320px; width: 100%; object-fit: cover;" src="http://photos.hotelbeds.com/giata/bigger/{{ $hotel->images[0]->path }}" alt="image">
                                    @endif
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> {{$hotel->country_code}}</h6>
                                        <h4><a href="{{$hotel->id}}">{{$hotel->name}}</a></h4>
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
                                        <p class="mb-0 trend-para">{{$hotel->description}}.</p>
                                        <div class="trend-last d-flex align-items-center justify-content-between">
                                            <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                                            <div class="trend-price">
                                                <p class="price white mb-0">From <span>$350.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--<div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="trend-item">
                            <div class="trend-image">
                                <img src="images/trending/trending2.jpg" alt="image">
                                <div class="trend-tags">
                                    <a href="#"><i class="flaticon-like"></i></a>
                                </div>
                            </div>
                            <div class="trend-content-main">
                                <div class="trend-content">
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany</h6>
                                    <h4><a href="#">Here We Bosphorus and Black Sea Cruise from Istanbul</a></h4>
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
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
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
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Denmark</h6>
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
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
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
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Japan</h6>
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
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
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
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Italy</h6>
                                    <h4><a href="#">Here We Bosphorus and Black Sea Cruise from Istanbul</a></h4>
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
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
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
                                    <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Turkey</h6>
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
                                    <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night</p>
                                        <div class="trend-price">
                                            <p class="price white mb-0">From <span>$350.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
