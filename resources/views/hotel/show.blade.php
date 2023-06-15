@extends('welcome')
@section('jsHead')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMAdvTIlhFFAKshpQL00roMoyG0qvpXc8" type="text/javascript"></script>
@endSection
@section('content')
    <section class="breadcrumb-main pb-0" style="background-image: url('/images/bg/bg8.jpg');">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">{{$hotel->name}}</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$hotel->name}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>

    <!-- blog starts -->
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="single-content">

                        <div class="description" id="description">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <ul class="d-md-flex mb-2">
                                        @if ($isNewlyRenovated)
                                        <li class="bg-pink py-1 px-3 white mr-2">Newly renovated</li>
                                        @endif

                                        @if ($hasFreeWifi)
                                        <li class="bg-navy py-1 px-3 white">Free Wi-Fi</li>
                                        @endif
                                    </ul>
                                    <div class="d-block d-md-flex flex-horizontal-center mb-1">
                                        <h4 class="font-weight-bold mb-0 mr-2" style="width: 80%;">{{ $hotel->address }}</h4>
                                        <div class="rating">
                                            @for ($i = 0; $i < $hotelRating; $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                            @for ($i = 0; $i < (5 - $hotelRating); $i++)
                                                <span class="fa fa-star" style="color: gray;"></span>
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        <i class="fa fa-map-marker-alt mr-2"></i> {{$hotel->city}}, {{$hotel->country_code}}
                                    </p>
                                </div>
                            </div>

                            <div class="single-slider">
                                <div class="slider-1 slider-store">
                                    @foreach($hotelImages as $image)
                                    <div class="detail-slider-item">
                                        <img style="height: 400px; width: 100%; object-fit: cover;" src="{{$image}}" alt="image">
                                    </div>
                                    @endforeach

                                </div>
                                <div class="slider-1 slider-thumbs">
                                    @foreach($hotelImages as $image)
                                    <div class="detail-slider-item">
                                        <img style="height: 100px; width: 100%; object-fit: cover;" src="{{$image}}" alt="image">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="description-inner mb-2 mt-1">
                                <h4>Description</h4>
                                <p>{!! $hotel->description !!}</p>
                            </div>

                            <div class="description-inner mb-2">
                                <div class="description-content">
                                    <div class="car-specifi">
                                        <h4>We give you the following for FREE: </h4>
                                        <ul>
                                            @foreach ($hotel["facilities"] as $facility)
                                            <li>
                                                <i class="fa fa-star"></i>
                                                <span>{{ $facility }}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="description-inner mb-2">
                                <h4>Select Your Room</h4>
                                @foreach($rooms as $room)
                                <div class="product-item__outer w-100 border p-4 mb-2">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="product-item__header">
                                                <img class="img-fluid w-100" src="/images/rooms/list1.jpg" alt="Image Description" />
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-lg-5">
                                            <div class="rooms-content py-2">
                                                <h5 class="mb-1"><a href="#" class="font-weight-bold">{{ $room['Name'][0] }}</a></h5>
                                                <div class="row mt-4">
                                                    @if ($hasFreeWifi)
                                                    <div class="col-lg-12 col-md-12 mb-1"><i class="fa fa-wifi"></i> Free Wi-Fi</div>
                                                    @endif
                                                    <div class="col-lg-12 col-md-12 mb-1"><i class="fa fa-star"></i> {{ ucwords(strtolower($room['Inclusion'])) }}</div>
                                                    {{-- <div class="col-lg-6 col-md-6 mb-1"><i class="fa fa-bed"></i> 2 single beds</div> --}}
                                                    {{-- <div class="col-lg-6 col-md-6 mb-1"><i class="fa fa-shower"></i> Shower</div> --}}
                                                    {{-- <div class="col-lg-12"><a href="#" class="text-underline font-size-14">Room photos and details</a></div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <div class="rooms-pricing text-center">
                                                <p class="mb-1">From <span class="font-weight-bold ml-1"> ${{ $room['TotalFare'] }} USD</span></p>
                                                    <span> / night</span>
                                                </p>
                                                <a href="{{ route('booking',$room["BookingCode"]) }}" class="nir-btn w-100">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog Ends -->

@endsection

@section('js')
<script>
    function initMap() {
        // Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
        lon = $('#map').attr('data-lon');
        lat = $('#map').attr('data-lat');
        console.log(lon);
        map = new google.maps.Map(document.getElementById("map"), {
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
    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
</script>
@endsection

