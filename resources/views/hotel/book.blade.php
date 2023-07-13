@extends('layouts.app')

@section('title')
    {{ $hotelinfo->name }} @parent
@endsection
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <style>
        .lds-roller {
            display: none;
        }
    </style>
@endsection

@php
    $startDate = new DateTime($data['checkIn']);
    $endDate = new DateTime($data['checkOut']);
    $interval = $startDate->diff($endDate);
    $days = $interval->format('%R%a');
    $ExtraGuestCharges = isset($rooms[0]['ExtraGuestCharges']) ? $rooms[0]['ExtraGuestCharges'] : 0;
    $TotalTax = floatval($rooms[0]['TotalTax']);
    $TotalFare = floatval($rooms[0]['TotalFare']);
    $BasePrice = floatval($rooms[0]['DayRates'][0][0]['BasePrice']);
@endphp
@section('content')
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    {{-- <h2 class="mb-0">{{ $hotel['name'] }}</h2> --}}
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('hotels.show', $hotelinfo['id']) }}">{{ $hotelinfo->name }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $rooms[0]['Name'][0] }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>

    {{-- pesiliduzu@mailinator.com --}}
    {{-- Pa$$w0rd! --}}
    <section class="blog trending destination-b">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <div class="single-content">

                        <div class="single-full-title border-b mb-2 pb-2">
                            <div class="single-title">
                                <h3 class="mb-1">{{ $hotelinfo['name'] }}</h3>
                                <h4>Room</h4>
                                <div class="rating-main">
                                    <div class="room"
                                        style="color: #fff; background: #162241; background-color: #162241; padding:1em;">
                                        <h5 class="mb-0 white">{{ $rooms[0]['Name'][0] }}</span></h5>
                                        <h5 class="white">Day Rate <span
                                                class="text-danger text-center">{{ number_format($BasePrice, 2) }}</span>
                                        </h5>
                                    </div>


                                    <p class="mb-0 mr-2"><i class="flaticon-location-pin"></i> {{ $hotelinfo['city'] }},
                                        {{ $hotelinfo['countryname'] }}</p>
                                    <p class="mb-2 border-t pt-2">{{ $hotelinfo['address'] }}</p>

                                    <div class="rating mr-2">
                                        @for ($i = 1; $i <= $hotelinfo['rating']; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="description">
                            <div class="card">
                                <div class="card-header">Cancel Policies</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5>From</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Charge Type</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Charge</h5>
                                        </div>
                                    </div>
                                    @foreach ($rooms[0]['CancelPolicies'] as $item)
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4"><span
                                                    class="text-danger">{{ date('j M Y', strtotime($item['FromDate'])) }}</span>
                                            </div>
                                            <div class="col-md-4"><span
                                                    class="text-danger">{{ $item['ChargeType'] }}</span></div>
                                            <div class="col-md-4"> <span
                                                    class="text-danger">{{ $item['CancellationCharge'] }}</span></div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="description-images mb-4">

                            <div class="description mb-4">
                                <h4>Room Amenities</h4>
                                <div class="row">
                                    @foreach ($Amenities as $item)
                                        @if (is_array($item))
                                            @foreach ($item as $item)
                                                <div class="col-md-4">
                                                    <p><i
                                                            class="fa fa-check text-success mr-1"></i>&nbsp;{{ $item }}
                                                    </p>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-md-4">
                                                <p><i class="fa fa-check text-success mr-1"></i>&nbsp;{{ $item }}
                                                </p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="description mb-2">
                                <h4>Description</h4>
                                <p>{!! $hotelinfo['description'] !!}</p>
                            </div>

                            <div class="description mb-2">
                                <div class="row">
                                    @if (isset($hotel[0]['RateConditions']) > 0)
                                        <div class="col-lg-12 col-md-12 mb-2 pr-2">
                                            <div class="desc-box">
                                                <h5 class="mb-1">Rate Conditions</h5>
                                                @foreach ($hotel[0]['RateConditions'] as $item)
                                                    <p><i class="fa fa-check text-success mr-1"></i> {{ $item }}
                                                    </p>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    @if (isset($hotel[0]['CancelPolicies']) > 0)
                                        <div class="col-lg-12 col-md-12 mb-2 pr-2">
                                            <div class="desc-box">
                                                <h5 class="mb-1">How to cancel</h5>
                                                @foreach ($rooms[0]['CancelPolicies'] as $key => $item)
                                                    <p><i class="fa fa-check text-success mr-1"></i>
                                                        {{ $cancel }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <form class="form-content" action="{{ route('bookings.store') }}" method="POST"
                                    id="bookingForm">
                                    <div id="bookingfeedback"></div>
                                    <div class="bookingfeedback"></div>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="white">Book Your Destination</h3>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="white">{{ $hotelinfo['name'] }}</p>
                                        </div>
                                        <div class="col-md-12">
                                            <address class="white">
                                                <p>{{ $hotelinfo['address'] }}</p>
                                            </address>
                                        </div>
                                        <div class="col-md-12">
                                            <h4 class="white">Room information</h4>
                                            <p class="white">{{ $rooms[0]['Name'][0] }}</p>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-3 form-group"><label class="white">Price @ Day</label> </div>
                                        <div class="col-md-5 form-group"><input type="text" name="dayrate" id="dayrate"
                                                class="form-control"
                                                value="{{ number_format($BasePrice, 2) . ' X ' . $days . ' days' }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-4 form-group"><input type="text" name="daysprice"
                                                id="daysprice" class="form-control"
                                                value="{{ number_format($BasePrice * $days, 2) }}" readonly></div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-8 form-group"><label class="white">Total Fare</label> </div>
                                        <div class="col-md-4 form-group float-right"><input type="text"
                                                name="totalfare" id="totalfare" class="form-control"
                                                value="{{ number_format($TotalFare, 2) }}" readonly></div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-8 form-group"><label class="white">Total Tax</label></div>
                                        <div class="col-md-4 form-group float-right"><input type="text"
                                                name="totaltax" id="totaltax" class="form-control"
                                                value="{{ number_format($TotalTax, 2) }}" readonly></div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-8 form-group"><label class="white">Extra Guest Charges</label>
                                        </div>
                                        <div class="col-md-4 form-group float-right"><input type="text"
                                                name="ExtraGuestCharges" id="ExtraGuestCharges" class="form-control"
                                                value="{{ number_format($ExtraGuestCharges, 2) }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-4 form-group"><label class="white"><b>Grand Total</b></label>
                                        </div>
                                        <div class="col-md-4 text-right"><b>{{ $hotel[0]['Currency'] }}</b></div>
                                        <input type="hidden" name="BillingCurrency" id="BillingCurrency"
                                            value="{{ $hotel[0]['Currency'] }}">
                                        <div class="col-md-4 form-group float-right"><b><input type="text"
                                                    name="grandtotal" id="grandTotal" class="form-control"
                                                    value="{{ number_format($ExtraGuestCharges + $TotalTax + $TotalFare + $BasePrice * $days, 2) }}"
                                                    readonly></b>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6 form-group">
                                            <label class="white">Check In</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range0" type="text" placeholder="yyyy-mm-dd"
                                                    name="checkin" class="form-control checkInVal"
                                                    value="{{ $data['checkIn'] }}" readonly>
                                            </div>
                                        </div>

                                        <input type="hidden" name="bookingcode" id="BookingCode" value="{{ $rooms[0]['BookingCode'] }}">
                                        <input type="hidden" name="tbocode" id="TboCode" value="{{ $hotel[0]['HotelCode'] }}">


                                        <div class="col-lg-6 form-group">
                                            <label class="white">Check Out</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range1" type="text" placeholder="yyyy-mm-dd"
                                                    name="checkout" class="form-control checkOutVal"
                                                    value="{{ $data['checkOut'] }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-group">
                                            <label class="white">Adult</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="form-control" name="adults" id="noOfAdults" readonly>
                                                    @for ($i = 0; $i < 8; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $i === $adults ? 'selected' : '' }}>{{ $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-group">
                                            <label class="white">Children</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="form-control" name="children" id="noOfChildren" readonly>
                                                    @for ($i = 0; $i < 8; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $i == $data['rooms'][0]['Children'] ? 'selected' : '' }}>
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>

                                            </div>
                                        </div>

                                        <hr>
                                        <h5 class="white">Adults</h5>
                                        <hr>
                                        <div class="col-md-12 text-left">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="white">Title</p>
                                                </div>
                                                <div class="col-md-5">
                                                    <p class="white">First Name</p>
                                                </div>
                                                <div class="col-md-5">
                                                    <p class="white">Last Name</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="adultsNameSection">
                                            @for ($i = 0; $i < $adults; $i++)
                                                <div class="row mb-1">
                                                    <div class="col-md-2"><select name="title" id="userTitle"
                                                            class="form-control" required>
                                                            <option value="Mr">Mr</option>
                                                            <option value="Mrs">Mrs</option>
                                                            <option value="Ms">Ms</option>
                                                        </select></div>
                                                    <div class="col-md-5"><input type="text" name="firstname"
                                                            id="firstName" class="form-control" required></div>
                                                    <div class="col-md-5"><input type="text" name="lastname"
                                                            id="lastName" class="form-control" required></div>
                                                </div>
                                            @endfor
                                        </div>
                                        <hr>
                                        <h5 class="white">Children</h5>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="row text-left">
                                                <div class="col-md-2">
                                                    <p class="white">Title</p>
                                                </div>
                                                <div class="col-md-5">
                                                    <p class="white">First Name</p>
                                                </div>
                                                <div class="col-md-5">
                                                    <p class="white">Last Name</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="childrenNamesSection">
                                            @for ($i = 0; $i < $children; $i++)
                                                <div class="row mb-1">
                                                    <div class="col-md-2"><select name="title" id="userTitle"
                                                            class="form-control" required>
                                                            <option value="Mr">Mr</option>
                                                            <option value="Mrs">Mrs</option>
                                                            <option value="Ms">Ms</option>
                                                        </select></div>
                                                    <div class="col-md-5"><input type="text" name="firstname"
                                                            id="firstName" class="form-control" required></div>
                                                    <div class="col-md-5"><input type="text" name="lastname"
                                                            id="lastName" class="form-control" required></div>
                                                </div>
                                            @endfor
                                        </div>
                                        <hr>
                                        <h5 class="white">Payment Information</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emai" class="white">Email</label>
                                                    <input type="email" name="EmailId" id="emailID"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone" class="white">Phone Number</label>
                                                    <input type="text" name="PhoneNumber" id="PhoneNumber"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CardNumber" class="white">Card Number</label>
                                                    <input type="text" name="CardNumber" id="CardNumber"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CvvNumber" class="white">Cvv Number</label>
                                                    <input type="text" name="CvvNumber" id="CvvNumber"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CardExpirationMonth" class="white">Card Expiry
                                                        Month</label>
                                                    <select name="CardExpirationMonth" id="CardExpirationMonth"
                                                        class="form-control" required>
                                                        @for ($i = 1; $i <= 12; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CardExpirationYear" class="white">Card Expiry
                                                        Year</label>
                                                    <select name="CardExpirationYear" id="CardExpirationYear"
                                                        class="form-control" required>
                                                        @for ($i = date('Y'); $i <= 2030; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CardHolderFirstName" class="white">First Name</label>
                                                    <input type="text" name="CardHolderFirstName"
                                                        id="CardHolderFirstName" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CardHolderlastName" class="white">Last Name</label>
                                                    <input type="text" name="CardHolderlastName"
                                                        id="CardHolderlastName" class="form-control" required>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="BillingAmount" class="white">Amount</label>
                                                    <input type="text" name="BillingAmount" id="BillingAmount"
                                                        class="form-control">
                                                </div>
                                            </div> --}}

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CardHolderAddress" class="white">Card holder
                                                        Zip/Address</label>
                                                    <input type="text" name="CardHolderAddress" id="CardHolderAddress"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="white">Card Holder Address</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="AddressLine1" class="white">Address Line 1</label>
                                                    <input type="text" name="AddressLine1" id="AddressLine1"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="AddressLine2" class="white">Address Line 2</label>
                                                    <input type="text" name="AddressLine2" id="AddressLine2"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="City" class="white">City</label>
                                                    <input type="text" name="City" id="City"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="PostalCode" class="white">Postal Code</label>
                                                    <input type="text" name="PostalCode"
                                                        id="PostalCode"class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="country" class="white">Country</label>
                                                    <select name="CountryCode" id="CountryCode" class="form-control"
                                                        required style="width: 100%;"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bookingfeedback"></div>
                                        <div class="lds-roller">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-0">
                                                <button type="submit" id="bookingsubmit" class="nir-btn w-100"><i class="fa fa-save"></i>
                                                    Book</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer_scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/iziToast.min.js') }}"></script>
    <script src="{{ asset('js/book.js') }}"></script>
@endsection
