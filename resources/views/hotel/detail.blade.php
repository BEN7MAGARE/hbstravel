@extends('layouts.app')

@section('title')
    {{ $title }} @parent
@endsection

@section('content')
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    {{-- <h2 class="mb-0">{{ $hotel['name'] }}</h2> --}}
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>


    <section class="blog trending destination-b">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="single-content">
                        <div class="single-full-title border-b mb-2 pb-2">
                            <div class="single-title">
                                <h3 class="mb-1">{{ $hotel['name'] }}</h3>
                                <div class="rating-main">
                                    <p class="mb-0 mr-2"><i class="flaticon-location-pin"></i> {{ $hotel['cityname'] }},
                                        {{ $hotel['countryname'] }}</p>
                                    <p class="mb-2 border-t pt-2">{{ $hotel['address'] }}</p>

                                    <div class="rating mr-2">
                                        @for ($i = 1; $i <= $hotel['rating']; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                    </div>
                                    {{-- <span>(1,186 Reviews)</span> --}}
                                </div>
                            </div>
                        </div>

                        <div class="description-images mb-4">
                            <div class="thumbnail-images">
                                <div class="slider-store slick-initialized slick-slider">
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 3060px;">
                                            @foreach ($hotel['images'] as $key => $item)
                                                @if ($key == 0)
                                                    <div class="slick-slide slick-current slick-active"
                                                        data-slick-index="{{ $key }}" aria-hidden="false"
                                                        style="width: 510px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                        <div>
                                                            <div style="width: 100%; display: inline-block;">
                                                                <img src="{{ $item }}" alt="1">
                                                            </div>
                                                        </div>
                                                    @else
                                                        {{-- <div class="slick-slide" data-slick-index="{{ $key }}"
                                                            aria-hidden="true" tabindex="-1"
                                                            style="width: 510px; position: relative; left: -510px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">
                                                            <div>
                                                                <div style="width: 100%; display: inline-block;">
                                                                    <img src="{{ $item }}" alt="1">
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="slider-thumbs slick-initialized slick-slider">
                                    <div class="slick-list draggable" style="padding: 0px 50px;">
                                        <div class="slick-track"
                                            style="opacity: 1; width: 1476px; transform: translate3d(-328px, 0px, 0px);">
                                            @for ($i = count($hotel['images']) - 1; $i >= 0; $i--)
                                                <div class="slick-slide slick-cloned"
                                                    data-slick-index="-{{ $i }}" id=""
                                                    aria-hidden="true" tabindex="-1" style="width: 82px;">
                                                    <div>
                                                        <div style="width: 100%; display: inline-block;">
                                                            <img src="{{ $hotel['images'][$i] }}" alt="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                            <div class="slick-slide slick-cloned" data-slick-index="11" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 82px;">
                                                <div>
                                                    <div style="width: 100%; display: inline-block;">
                                                        <img src="images/slider/2.jpg" alt="1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                            </div>

                        </div>
                    </div>

                    <div class="tour-includes mb-4">
                        {{-- <table>
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i> 5 Days</td>
                                        <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max People : 26
                                        </td>
                                        <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> Jan 18 - Dec
                                            21</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age : 10+
                                        </td>
                                        <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup :
                                            Airport</td>
                                        <td><i class="fa fa-file-alt pink mr-1" aria-hidden="true"></i> Langauge -
                                            English, Thai</td>
                                    </tr>
                                </tbody>
                            </table> --}}
                    </div>

                    <div class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
                        <h4><strong>Rooms</strong></h4>
                        @foreach ($hotel['rooms'] as $key => $item)
                            @if ($key == 0)
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h5 class="mb-0"><span>{{ $item['Name'][0] }}</span> <span
                                                class="text-danger float-center">{{ number_format($item['DayRates'][0][0]['BasePrice'], 2) . ' ' . $hotel['currency'] }}</span>
                                        </h5>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>{{ $item['Inclusion'] }}</p>
                                        </div>
                                        <a href="{{ route('prebooking', $item['BookingCode']) }}" class="nir-btn">Book
                                        Now</a>
                                    </div>
                                </div>
                            @else
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h5 class="mb-0"><span>{{ $item['Name'][0] }}</span> <span
                                                class="text-danger float-center">{{ number_format($item['DayRates'][0][0]['BasePrice'], 2) . ' ' . $hotel['currency'] }}</span>
                                        </h5>

                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>{{ $item['Inclusion'] }}</p>
                                        </div>
                                        <a href="{{ route('prebooking', $item['BookingCode']) }}" class="nir-btn">Book
                                        Now</a>
                                    </div>


                                </div>
                            @endif
                        @endforeach
                    </div>


                    <div class="description mb-2">
                        <h4>What to Expect</h4>
                        <div class="row">
                            @for ($i = 0; $i < count($hotel['facilities']); $i++)
                                <div class="col-md-6">
                                    <p><i class="fa fa-check text-success mr-1"></i>&nbsp;{{ $hotel['facilities'][$i] }}</p>
                                </div>
                            @endfor
                        </div>

                    </div>

                    <div class="description mb-2">
                        <h4>Description</h4>
                        <p>{!! $hotel['description'] !!}</p>
                    </div>

                    <div class="description mb-2">
                        <div class="row">
                            {{-- <div class="col-lg-6 col-md-6 mb-2 pr-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Departure &amp; Return Location</h5>
                                        <p class="mb-0">John F.K. International Airport(Google Map)</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-2 pl-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Bedroom</h5>
                                        <p class="mb-0">4 Bedrooms</p>
                                    </div>
                                </div> --}}

                            <div class="col-lg-6 col-md-6 mb-2 pr-2">
                                <div class="desc-box">
                                    <h5 class="mb-1">Checkin Time</h5>
                                    <p class="mb-0">{{ $hotel['checkin'] }}</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-2 pl-2">
                                <div class="desc-box">
                                    <h5 class="mb-1">Checkout Time</h5>
                                    <p class="mb-0">{{ $hotel['checkout'] }}</p>
                                </div>
                            </div>

                            @if (isset($hotel['attractions']) && count($hotel['attractions']) > 0)
                                <div class="col-lg-6 col-md-6 mb-2 pr-2">
                                    <div class="desc-box">
                                        <h5 class="mb-1">Attractions</h5>
                                        <ul>
                                            @foreach ($hotel['attractions'] as $item)
                                                <li><i class="fa fa-check text-success mr-1"></i> {!! $item !!}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>




                    <div class="single-map mb-4">
                        <h4>Map</h4>
                        <div class="map">
                            @php
                                $maps = explode('|', $hotel['map']);
                            @endphp
                            <input type="hidden" name="mapLatitude" id="mapLatitude" value="{{ $maps[0] }}">
                            <input type="hidden" name="mapLongitude" id="mapLongitude" value="{{ $maps[1] }}">
                            <div style="width: 100%" id="hotelMap">
                                {{-- <iframe height="400"
                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> --}}

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        {{-- <div class="sidebar-item">
                            <form class="form-content">
                                <h4 class="title white text-center">MAKE A BOOKING</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <span class="white">Your choosen date is</span>
                                            <h3 class="choosen-date white mb-0"><i class="fa fa-calendar"></i>
                                                @php
                                                    $startDate = new DateTime($hotel['checkout']);
                                                    $endDate = new DateTime($hotel['checkin']);

                                                    $interval = $endDate->diff($startDate);
                                                    $daysDifference = $interval->days;
                                                @endphp
                                             {{ date('d', strtotime($hotel['checkin']))  -
                                                date('d M, Y', strtotime($hotel['checkout'])) }} <small
                                                    class="d-block font-weight-normal">({{ $daysDifference }} days) </small></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">No. Of People</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="form-control form-control-md" id="numberofpeople"
                                                    style="display: none;">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group bg-white p-3">
                                            <ul>
                                                <li class="d-block pb-1">$150.00 x 2 guests<span
                                                        class="float-right pink">$300.00</span></li>
                                                <li class="d-block pb-1">Booking fee + tax<span
                                                        class="float-right pink">$10.00</span></li>
                                                <li class="d-block  pb-1">Book now &amp; Save<span
                                                        class="float-right  pink">-$15</span></li>
                                                <li class="d-block pb-1">Other fees<span
                                                        class="float-right pink">Free</span></li>
                                                <li class="d-block border-t">
                                                    <div class="pt-1">
                                                        <span>Total</span><span class="float-right pink">$350.00</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <a href="#" class="nir-btn w-100">Instant Book</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> --}}

                        <div class="sidebar-item">
                            <div class="sidebar-contact text-center bg-navy">
                                <i class=" fa fa-phone-alt white"></i>
                                <h3 class="white"><span>Book</span> by phone</h3>
                                <a href="tel://{{ $hotel['phonenumber'] }}"
                                    class="phone white">{{ $hotel['phonenumber'] }}</a>
                                <small class="white d-block mt-2"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('footer_scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMAdvTIlhFFAKshpQL00roMoyG0qvpXc8"
        type="text/javascript"></script>
    <script>
        function initMap() {
            // Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
            lon = $('#mapLongitude').attr('data-lon');
            lat = $('#mapLatitude').attr('data-lat');

            console.log(lon);
            map = new google.maps.Map(document.getElementById("hotelMap"), {
                // Nous plaçons le centre de la carte avec les coordonnées ci-dessus
                center: new google.maps.LatLng(lat, lon),
                // Nous définissons le zoom par défaut
                zoom: 11,
                // Nous définissons le type de carte (ici carte routière)
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                // Nous activons les options de contrôle de la carte (plan, satellite...)
                mapTypeControl: true,
                // Nous désactivons la roulette de souris
                scrollwheel: false,
                mapTypeControlOptions: {
                    // Cette option sert à définir comment les options se placent
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                },
                // Activation des options de navigation dans la carte (zoom...)
                navigationControl: true,
                navigationControlOptions: {
                    // Comment ces options doivent-elles s'afficher
                    style: google.maps.NavigationControlStyle.ZOOM_PAN
                }
            });
        }
        window.onload = function() {
            // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
            initMap();
        };
    </script>
@endsection
