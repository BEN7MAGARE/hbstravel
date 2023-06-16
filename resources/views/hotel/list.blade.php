@extends('layouts.app')

@section('title')
    {{ $title }} @parent
@endsection

@section('header_styles')
@endsection

@section('content')
    <section class="breadcrumb-main pb-4" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">{{ $title }}</h2>
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

    <section class="blog destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="trend-box">
                        <div class="list-results d-flex align-items-center justify-content-between">
                            <div class="list-results-sort">
                                <p class="m-0">Showing 1-{{ count($hotels) }} of {{ $hotelscount }} results</p>
                            </div>
                            <div class="click-menu d-flex align-items-center justify-content-between">
                                <div class="change-list f-active mr-2"><a href="#"><i class="fa fa-bars"></i></a>
                                </div>
                                <div class="change-grid"><a href="#"><i class="fa fa-th"></i></a>
                                </div>

                                <div class="sortby d-flex align-items-center justify-content-between ml-2">
                                    <select class="niceSelect" style="display: none;">
                                        <option value="1">Sort By</option>
                                        <option value="2">Average rating</option>
                                        <option value="3">Price: low to high</option>
                                        <option value="4">Price: high to low</option>
                                    </select>
                                    <div class="nice-select niceSelect" tabindex="0"><span class="current">Sort
                                            By</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Sort By</li>
                                            <li data-value="2" class="option">Average rating</li>
                                            <li data-value="3" class="option">Price: low to high</li>
                                            <li data-value="4" class="option">Price: high to low</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($hotels as $item)
                            <div class="blog-full d-flex justify-content-around mb-4">
                                <div class="row w-100">
                                    {{-- <div class="ribbon ribbon-top-left"><span>10% OFF</span></div> --}}
                                    <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                        <div class="blog-image">
                                            @if ($item['image'] == null)
                                                <img src="https://via.placeholder.com/425x300" alt="image"
                                                     style="object-fit: cover;" />
                                            @else
                                                <img src="{{ $item['image'] }}" alt="image"
                                                 style="object-fit: cover;"
                                                    onerror="this.onerror=null;this.src='https://via.placeholder.com/425x300';" />
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8 col-xs-12">
                                        <div class="blog-content p-0">
                                            <h4 class="mb-1"><a href="{{ route('hotels.show', $item['hotel']['id']) }}"
                                                    class="">{{ $item['hotel']['city'] }}</a></h4>
                                            <div class="trend-tags">
                                                <a href="{{ route('hotels.show', $item['hotel']['id']) }}"><i
                                                        class="fa fa-heart"></i></a>
                                            </div>

                                            <div class="rating pb-1">
                                                @for ($i = 1; $i < $item['rating']; $i++)
                                                    <span class="fa fa-star checked"></span>
                                                @endfor
                                            </div>
                                            <a href="{{ route('hotels.show', $item['hotel']['id']) }}">
                                                <p class="mb-2 pink"><i class="fa fa-eye mr-1"></i>
                                                    {{ $item['hotel']['name'] }}
                                                    <i class="fa fa-map-marker mr-1 ml-3"></i> {{ $country->name }}
                                                </p>
                                            </a>
                                            <p class="mb-2 border-t pt-2">{{ $item['hotel']['address'] }}</p>
                                            <div class="deal-price">
                                                <p>{{ $item['starting']['room'] }} &nbsp;From<span
                                                        class="price mb-0">&nbsp;{{ number_format($item['starting']['price'], 2) }}
                                                        &nbsp;{{ $item['currency'] }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">
                            <form class="form-content" action="{{ route('hotel.details') }}" method="post">
                                <h4 class="title white">Find The Places</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">Your Destination</label>
                                            <div class="input-box">
                                                <i class="flaticon-placeholder"></i>
                                                <select class="form-control" name="hotel_id" id="hotelID">
                                                    <option value="" disabled>Select one</option>
                                                    @foreach ($hotels as $item)
                                                        <option value="{{ $item['hotel']['id'] }}">
                                                            {{ $item['hotel']['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check In</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range0" type="text" placeholder="yyyy-mm-dd"
                                                    name="checkin" class="form-control"
                                                    value="{{ $values['checkin'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check Out</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range1" type="text" placeholder="yyyy-mm-dd"
                                                    name="checkout" class="form-control"
                                                    value="{{ $values['checkout'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Adult</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="form-control" name="adults" id="adults">
                                                    @for ($i = 1; $i < 8; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $i == $values['adults'] ? 'selected' : '' }}>
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Children</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="form-control" name="children" id="children">
                                                    @for ($i = 0; $i < 8; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $i == $values['children'] ? 'selected' : '' }}>
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="nir-btn w-100"><i class="fa fa-search"></i>
                                                Check Availability</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="list-sidebar">

                            <div class="sidebar-item">
                                <h4>City</h4>
                                <div class="citiesection"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_scripts')
@endsection
