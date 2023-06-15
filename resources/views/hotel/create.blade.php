@extends('layouts.dashboard')

@section('title')
    Hotel create @parent
@endsection

@section('content')
    <div class="dashboard-content">
        <div class="add-listing">
            <div class="listing-main">
                <div class="addlist-inner mb-3">
                    <div class="addlist-title">
                        <h4 class="m-0"><i class="fa fa-hotel pr-2"></i>Hotel Information</h4>
                    </div>
                    <div id="hotelfeedback"></div>
                    <form action="{{ route('hotels.store') }}" method="POST" id="hotelCreateForm">
                        @csrf
                        <div class="addlist-content bg-white">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control form-control-md" name="name"
                                                id="name" placeholder="Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <label>Description</label>
                                            <input type="text" class="form-control form-control-md" name="description"
                                                id="description" placeholder="Description">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control form-control-md" id="country_code" name="country_code">

                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>State</label>
                                        <div class="input-box">
                                            <select class="form-control form-control-md chzn-select" id="stateID"
                                                name="state_id">

                                            </select>
                                        </div>
                                    </div>
                                </div> --}}


                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Destination</label>
                                        <div class="input-box">
                                            <select class="form-control form-control-md" id="destination_code"
                                                name="destination_code">

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control form-control-md" id="destinationID"
                                            name="destination_id">

                                        </select>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Category Group</label>
                                        <div class="input-box">
                                            <select class="form-control form-control-md chzn-select" id="categoryID"
                                                name="category_id">

                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <div class="input-box">
                                            <select class="form-control form-control-md" id="category_code"
                                                name="category_code">

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Zone</label>
                                        <div class="input-box">
                                            <select class="form-control form-control-md" id="zone_code" name="zone_code">

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <div class="input-box">
                                            <input class="form-control form-control-md" id="longitude" name="longitude">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <div class="input-box">
                                            <input class="form-control form-control-md" id="latitude" name="latitude">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Hotel Chain</label>
                                        <div class="input-box">
                                            <select name="chain_code" id="chain_code" class="form-control form-control-md">

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Accommodation type</label>
                                        <div class="input-box">
                                            <select name="accommodation_type_code" id="accommodation_type_code"
                                                class="form-control form-control-md"></select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <label>License </label>
                                            <input type="text" class="form-control form-control-md" name="licence"
                                                id="licence" placeholder="Licence">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <label>Ranking </label>
                                            <input type="text" class="form-control form-control-md" id="ranking"
                                                name="ranking" placeholder="Ranking">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <label>Number of rooms </label>
                                            <input type="text" class="form-control form-control-md" id="roomsCount"
                                                name="roomscount" placeholder="No of rooms">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <label>Currency</label>
                                            <select class="form-control form-control-md" id="currency" name="currency">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <label>Unit price</label>
                                            <input type="text" class="form-control form-control-md" id="unitPrice"
                                                name="unit_price" placeholder="Unit Price">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="addlist-title">
                                <h4 class="m-0"><i class="fa fa-hotel pr-2"></i>Contact Information</h4>
                            </div>

                            <div class="addlist-content bg-white">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <label>Phone No.</label>
                                                <input type="text" class="form-control form-control-md" name="phone"
                                                    id="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control form-control-md" name="email"
                                                    id="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <label>Pastal Address</label>
                                                <input type="text" class="form-control form-control-md"
                                                    name="postal_address" id="postal_address"
                                                    placeholder="Postal Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <label>Website</label>
                                                <input type="text" class="form-control form-control-md" name="website"
                                                    id="website" placeholder="http://">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="term-conds mb-3">
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox">
                                    <div class="state d-flex align-items-center p-warning-o">
                                        <label>I Agree with all <a href="#">Terms &amp;
                                                Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="nir-btn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer_scripts')
    <script src="{{ asset('js/create.js') }}"></script>
@endsection
