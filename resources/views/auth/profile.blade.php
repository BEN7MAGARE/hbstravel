@if (auth()->user()->role === "admin")
@extends('layouts.admin')
@else
@extends('layouts.user')
@endif
@section('title')
    Profile @parent
@endsection

@section('header_styles')
@endsection

@section('content')
        <div class="dashboard-content">
            <div class="dashboard-form mb-4">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                        <div class="dashboard-list">
                            <h4 class="gray">Profile Details</h4>
                            <div class="dashboard-list-static">

                                <div class="edit-profile-photo">
                                    <img src="{{ asset('images/user-avatar.jpg') }}" alt="">
                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" class="upload">
                                        </div>
                                    </div>
                                </div>

                                <div class="my-profile">
                                    <form action="{{ route('users.update', auth()->id()) }}" method="PUT">
                                        <div class="form-group">
                                            <label>Your Name *</label>
                                            <input value="{{ auth()->user()->name }}" type="text" name="name"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone Number *</label>
                                            <input value="{{ auth()->user()->phone }}" type="text" name="phone"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Email Address *</label>
                                            <input value="{{ auth()->user()->email }}" type="text" name="email"
                                                class="form-control">
                                        </div>

                                        {{-- <div class="form-group">
                                        <label>Your Bio *</label>
                                        <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="twitter-input"><i class="fab fa-twitter"></i>
                                            Twitter</label>
                                        <input placeholder="https://www.twitter.com/" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="fb-input"><i class="fab fa-facebook"></i>
                                            Facebook</label>
                                        <input placeholder="https://www.facebook.com/" type="text">
                                    </div> --}}
                                </div>
                                <div class="form-btn">
                                    <a href="#" class="nir-btn">SAVE CHANGE</a>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                        <div class="dashboard-list margin-top-0">
                            <h4 class="gray">Your Address</h4>
                            <div class="dashboard-list-static">

                                <div class="my-profile">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" name="company" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address *</label>
                                        <input type="text"  name="address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Zip Code *</label>
                                        <input type="text"  name="zip_code" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Country *</label>
                                        <input type="text"  name="country" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>City *</label>
                                        <input type="text"  name="city" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Region/State *</label>
                                        <input type="text"  name="region" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection

@section('footer_scripts')
@endsection
