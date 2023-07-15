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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item">
                            <div class="description mb-2">
                                <h4>What to Expect</h4>
                                <div class="row">
                                    @for ($i = 0; $i < count($hotel['facilities']); $i++)
                                        <div class="col-md-12">
                                            <p><i
                                                    class="fa fa-check text-success mr-1"></i>&nbsp;{{ $hotel['facilities'][$i] }}
                                            </p>
                                        </div>
                                    @endfor
                                </div>

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
