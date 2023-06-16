<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Hotel;
use App\Services\TboService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->hotel = new Hotel();
        $this->service = new TboService();
        $this->booking = new Booking();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    function prebooking($code)
    {
        $data = [];
        $children = 0;
        $adults = 0;

        if (session()->has('search')) {
            $data = session("search");
            $adults += $data["rooms"][0]["Adults"];
            $children += $data["rooms"][0]["Children"];
        }
        $Amenities = [];

        $prebook = $this->service::prebook($code);
        if ($prebook["Status"]["Code"] === 200) {
            $hotel = $prebook["HotelResult"];
            // dd($hotel);
            $rooms = $hotel[0]["Rooms"];
            if (isset($rooms[0]['Amenities'])) {
                array_push($children, $rooms[0]['Amenities']);
            }
            $hotelinfo = $this->hotel->where('tbo_code', $hotel[0]["HotelCode"])->first();
            return view('hotel.book', compact('hotel', 'hotelinfo', 'rooms', 'Amenities', 'data', 'adults', 'children'));
        } else {
            return redirect()->back()->withErrors('No data matched your seach. Please refresh and try again.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $booking = $this->booking->create([
            "user_id" => $request->user()->id,
            "ref_no" => $this->booking->getref(),
            "hotelcode" => $request->HotelCode,
            "bookingcode" => $request->BookingCode,
            "roomname" => $request->RoomName,
            "inclusion" => $request->Inclusion,
            "no_of_adults" => $request->NoOfAdults,
            "no_of_children" => $request->NoOfChildren,
            "email" => $request->EmailId,
            "phone" => $request->PhoneNumber,
            "checkin" => $request->CheckIn,
            "checkout" => $request->CheckOut,
        ]);
        $payment = $this->payment->create([
            'CardNumber' => $request["CardNumber"],
            'CvvNumber' => $request["CvvNumber"],
            'CardExpirationMonth' => $request["CardExpirationMonth"],
            'CardExpirationYear' => $request["CardExpirationYear"],
            'CardHolderFirstName' => $request["CardHolderFirstName"],
            'CardHolderlastName' => $request["CardHolderlastName"],
            'CardHolderAddress' => $request["CardHolderAddress"],
            'BillingCurrency' => $request["BillingCurrency"],
            'AddressLine1' => $request["AddressLine1"],
            'AddressLine2' => $request["AddressLine2"],
            'City' => $request["City"],
            'PostalCode' => $request["PostalCode"],
            'CountryCode' => $request["CountryCode"],
            'DaysRate' => $request["DaysRate"],
            'DaysPrice' => $request["DaysPrice"],
            'TotalTax' => $request["TotalTax"],
            'ExtraGuestCharges' => $request["ExtraGuestCharges"],
            'BillingAmount' => $request["BillingAmount"],
        ]);
        DB::commit();
        $data = $request;
        $data["ClientReferenceId"] = auth()->user()->ref_no;
        $data["BookingReferenceId"] = $booking->ref_no;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
