@extends('layouts.user')

@section('title')
    Bookings @parent
@endsection

@section('header_styles')
    <style>
        .dropdown {
            list-style: none;
        }
    </style>
@endsection

@section('content')
    <div class="dashboard-content">
        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Bookings</h4>
                    </div>

                    <div class="">
                        <table class="table table-hover">
                            <thead>
                                <td>Hotel</td>
                                <td>Rooms</td>
                                <td>Booking</td>
                                <td>Action</td>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    @php
                                        $user = $booking->user;
                                        $hotel = $booking->hotel;
                                        $country = \App\Models\Country::where('iso', $hotel->country_code)->first();
                                    @endphp
                                    <tr>

                                        <td>
                                            <p>{{ $hotel->name }}</p>
                                            <p>{{ $hotel->address }}</p>
                                            <p>{{ $hotel->city . ', ' . $country->name }}</p>
                                        </td>

                                        <td>
                                            <p>{{ $booking->roomname }}</p>
                                            <p>{{ $booking->inclusion }}</p>
                                            <p>{{ $booking->payment->BillingCurrency." ". number_format($booking->payment->BillingAmount,2) }}</p>
                                        </td>

                                        <td>
                                            <p>{{ $booking->checkin . ' - ' . $booking->checkout }}</p>
                                            <p><b>Adults: </b>{{ $booking->no_of_adults }}</p>
                                            <p><b>Children: </b>{{ $booking->no_of_children }}</p>
                                            <p>{{ $booking->email }}</p>
                                            <p>{{ $booking->phone }}</p>
                                        </td>

                                        <td>
                                            <li class="dropdown" style="list-style: none;"><a href="#"
                                                    data-toggle="dropdown"
                                                    class="btn btn-primary btn-round btn-sm btn-floated"><b>Action</b></a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item"><a href="#"
                                                            id="bookingDetailsModalToggle" data-toggle="modal"
                                                            data-target="#bookingDetailsModal"
                                                            data-id="{{ $booking->id }}"><i
                                                                class="fa fa-eye text-success"></i>&nbsp;View</a></li>
                                                </ul>
                                            </li>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center">
                        <div class="pagination">
                            {{ $bookings->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="bookingDetailsModal" tabindex="-1" role="dialog" aria-labelledby="numberOfRoomsLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <div class="modal-title">
                    <p>Booking Details</p>
                </div>

                <button type="button" class="close btn btn-warning text-danger" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body" id="bookindDetailsSection">
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
            </div>
        </div>
    </div>
</div>

@section('footer_scripts')
    <script>
        (function() {
            $('body').on('click', '#bookingDetailsModalToggle', function(event) {
                let booking_id = $(this).data('id');
                console.log(booking_id);
                $.getJSON('/bookings/' + booking_id, function(booking) {
                    console.log(booking);
                });
            })
        })()
    </script>
@endsection
