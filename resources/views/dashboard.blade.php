@extends('layouts.dashboard')

@section('title')
    Dashboard @parent
@endsection

@section('header_styles')
@endsection

@section('content')
    <div class="dashboard-content">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="dashboard-stat mb-4">
                    <div class="dashboard-stat-content">
                        <h4>6</h4> <span>Active Bookings</span>
                    </div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                    <div class="dashboard-stat-item">
                        <p>Someone bookmarked your listing!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="dashboard-stat mb-4">
                    <div class="dashboard-stat-content">
                        <h4>726</h4> <span>Total Bookings</span>
                    </div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                    <div class="dashboard-stat-item">
                        <p>Someone bookmarked your listing!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="dashboard-stat mb-4">
                    <div class="dashboard-stat-content">
                        <h4>95</h4> <span>Total Reviews</span>
                    </div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                    <div class="dashboard-stat-item">
                        <p>Someone bookmarked your listing!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Country Campaigns</h4>
                        <p class="mb-0">Airtport Hotels The Right Way To Start A Short Break
                            Holiday</p>
                    </div>
                    <div class="table-responsive table-desi">
                        <table class="basic-table table table-hover">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Client</th>
                                    <th>Changes</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="">Australia</span>
                                    </td>
                                    <td>Beavis</td>
                                    <td><span class="txt-success"><i class="fa fa-angle-up"
                                                aria-hidden="true"></i><span>2.43%</span></span>
                                    </td>
                                    <td>
                                        <span class="">$1478</span>
                                    </td>
                                    <td>
                                        <span class="label text-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="">Cuba</span>
                                    </td>
                                    <td>Felix</td>
                                    <td><span class="txt-success"><i class="fa fa-angle-up"
                                                aria-hidden="true"></i><span>1.43%</span></span>
                                    </td>
                                    <td>
                                        <span class="">$951</span>
                                    </td>
                                    <td>
                                        <span class="label text-danger">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="">France</span>
                                    </td>
                                    <td>Cannibus</td>
                                    <td><span class="txt-success"><i class="fa fa-angle-up"
                                                aria-hidden="true"></i><span>8.43%</span></span>
                                    </td>
                                    <td>
                                        <span class="">$632</span>
                                    </td>
                                    <td>
                                        <span class="label text-primary">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="">Norway</span>
                                    </td>
                                    <td>Neosoft</td>
                                    <td><span class="txt-success"><i class="fa fa-angle-up"
                                                aria-hidden="true"></i><span>7.43%</span></span>
                                    </td>
                                    <td>
                                        <span class="">$325</span>
                                    </td>
                                    <td>
                                        <span class="label text-primary">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="">South Africa</span>
                                    </td>
                                    <td>Hencework</td>
                                    <td><span class="txt-success"><i class="fa fa-angle-up"
                                                aria-hidden="true"></i><span>9.43%</span></span>
                                    </td>
                                    <td>
                                        <span>$258</span>
                                    </td>
                                    <td>
                                        <span class="label text-success">Active</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
