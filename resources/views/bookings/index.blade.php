@extends('layouts.dashboard')

@section('title')
    Dashboard @parent
@endsection

@section('header_styles')
@endsection

@section('content')
    <div class="dashboard-content">
        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Bookings</h4>
                    </div>

                    <div class="table-responsive table-desi">
                        @if (auth()->user()->role === 'admin')
                            <table class="basic-table table table-hover">
                                <thead>
                                    <td>Client</td>
                                    <td>Hotel</td>
                                    <td>Rooms</td>
                                    <td>Info</td>
                                    <td>Action</td>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        @php
                                            $user = $booking->user;
                                        @endphp
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <table class="basic-table table table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">User Details</h4>
                        <p class="mb-0">Airtport Hotels The Right Way To Start A Short Break
                            Holiday</p>
                    </div>
                    <div class="table-responsive table-desi">
                        <table class="basic-table table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Enquiry</th>
                                    <th>Bookings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/1.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><a href="#"><span>Marsha Hogan</span></a>
                                    </td>
                                    <td>+01 3214 6522</td>
                                    <td>chadengle@dummy.com</td>
                                    <td>Australia</td>
                                    <td>
                                        <span class="label text-danger">12</span>
                                    </td>
                                    <td>
                                        <span class="label text-success">24</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/2.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><a href="#"><span>Marsha Hogan</span></a>
                                    </td>
                                    <td>+01 3214 6522</td>
                                    <td>chadengle@dummy.com</td>
                                    <td>Australia</td>
                                    <td>
                                        <span class="label text-danger">12</span>
                                    </td>
                                    <td>
                                        <span class="label text-success">24</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/1.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><a href="#"><span>Marsha Hogan</span></a>
                                    </td>
                                    <td>+01 3214 6522</td>
                                    <td>chadengle@dummy.com</td>
                                    <td>Australia</td>
                                    <td>
                                        <span class="label text-danger">12</span>
                                    </td>
                                    <td>
                                        <span class="label text-success">24</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/2.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><a href="#"><span>Marsha Hogan</span></a>
                                    </td>
                                    <td>+01 3214 6522</td>
                                    <td>chadengle@dummy.com</td>
                                    <td>Australia</td>
                                    <td>
                                        <span class="label text-danger">12</span>
                                    </td>
                                    <td>
                                        <span class="label text-success">24</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/1.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><a href="#"><span>Marsha Hogan</span></a>
                                    </td>
                                    <td>+01 3214 6522</td>
                                    <td>chadengle@dummy.com</td>
                                    <td>Australia</td>
                                    <td>
                                        <span class="label text-danger">12</span>
                                    </td>
                                    <td>
                                        <span class="label text-success">24</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-7 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Listing Enquiry</h4>
                        <p class="mb-0">Airtport Hotels The Right Way To Start A Short Break
                            Holiday</p>
                    </div>
                    <div class="table-responsive table-desi">
                        <table class="basic-table table table-hover">
                            <thead>
                                <tr>
                                    <th>Listing</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>City</th>
                                    <th>Enquiry</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/2.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><span>Taaj Club, USA</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Hawaii</td>
                                    <td>
                                        <span class="label text-success">15</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/1.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><span>Grand Hotel,Brazil</span>
                                    </td>
                                    <td>07 aug</td>
                                    <td>Hawaii</td>
                                    <td>
                                        <span class="label text-success">05</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/2.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><span>Grand Pales,India</span>
                                    </td>
                                    <td>18 jun</td>
                                    <td>Hawaii</td>
                                    <td>
                                        <span class="label text-success">35</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/2.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><span>Palace Hotel, China</span>
                                    </td>
                                    <td>09 apr</td>
                                    <td>Hawaii</td>
                                    <td>
                                        <span class="label text-success">24</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="list-img"><img src="images/reviewer/1.jpg" alt=""
                                                class="w-50"></span>
                                    </td>
                                    <td><span>First Hotel,Germany</span>
                                    </td>
                                    <td>21 jun</td>
                                    <td>Hawaii</td>
                                    <td>
                                        <span class="label text-success">18</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Social Media</h4>
                        <p class="mb-0">Airtport Hotels The Right Way To Start A Short</p>
                    </div>
                    <div class="table-responsive table-desi">
                        <table class="basic-table table table-hover">
                            <thead>
                                <tr>
                                    <th>Media</th>
                                    <th>Name</th>
                                    <th>Share</th>
                                    <th>Like</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fab fa-facebook"></i></td>
                                    <td><span>Linked In perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-twitter"></i></td>
                                    <td><span>Twitter perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-facebook"></i></td>
                                    <td><span>Facebook perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-google"></i></td>
                                    <td><span>Google perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-youtube"></i></td>
                                    <td><span>YouTube perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-whatsapp"></i></td>
                                    <td><span>WhatsApp perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-twitter"></i></td>
                                    <td><span>Twitter perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                                <tr>
                                    <td><i class="fab fa-youtube"></i></td>
                                    <td><span>YouTube perfect</span>
                                    </td>
                                    <td>15K</td>
                                    <td>18K</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')
@endsection
