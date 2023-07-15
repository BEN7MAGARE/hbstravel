@extends('layouts.user')

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
                        <h4>{{ $activebookings }}</h4> <span>Active Bookings</span>
                    </div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                    <div class="dashboard-stat-item">
                            <p>My active bookings. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="dashboard-stat mb-4">
                    <div class="dashboard-stat-content">
                        <h4>{{ $bookingscount }}</h4> <span>Total Bookings</span>
                    </div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                    <div class="dashboard-stat-item">
                           <p>My active bookings. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="dashboard-stat mb-4">
                    <div class="dashboard-stat-content">
                        <h4>{{ $hotelscount }}</h4> <span>Hotels Available</span>
                    </div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-hotel"></i></div>
                    <div class="dashboard-stat-item">
                        <p>My bookings. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Bookings</h4>
                    </div>
                    <div class="table-responsive table-desi">
                        <table class="basic-table table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ref NO</th>
                                    <th>Country</th>
                                    @if (auth()->user()->role === 'admin')
                                        <th>Client</th>
                                    @endif
                                    <th>Hotel</th>
                                    <th>Room</th>
                                    <th>Cost</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $booking->ref_no }}</td>
                                        <td><span class="">{{ $booking->hotel->country->name }}</span></td>
                                        @if (auth()->user()->role === "admin")
                                        <td>{{ $booking->user->name }}</td>
                                        @endif
                                        <td><span class="txt-success">{{ $booking->hotel->name }}</span></td>
                                        <td><span class="txt-success">{{ $booking->roomname }}</span></td>
                                        <td>
                                            <span class="">{{ $booking->payment->BillingCurrency.' '.number_format($booking->payment->BillingAmount,2) }}</span>
                                        </td>
                                        <td>
                                            <span class="label text-success">{{ ($booking->status == 0) ? "pending" : $booking->status; }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('bookings.index') }}" class="btn btn-primary btn-sm">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')

@endsection
