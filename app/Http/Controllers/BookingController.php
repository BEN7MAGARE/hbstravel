<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Payment;
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
        $this->payment = new Payment();
    }

    public function index()
    {
        $query = $this->booking->query();
        if (auth()->user()->role !== "admin") {
            $query->where('user_id', auth()->id());
        }
        $bookings = $query->with('user')->latest()->get();
        // return $bookings;
        return view('bookings.index', compact('bookings'));
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
        $Amenities = array();
        $prebook = $this->service::prebook($code);
        if ($prebook["Status"]["Code"] === 200) {
            $hotel = $prebook["HotelResult"];
            $rooms = $hotel[0]["Rooms"];
            if (isset($rooms[0]['Amenities'])) {
                array_push($Amenities, $rooms[0]['Amenities']);
            }
            $hotelinfo = $this->hotel->where('tbo_code', $hotel[0]["HotelCode"])->first();
            return view('hotel.book', compact('hotel', 'hotelinfo', 'rooms', 'Amenities', 'data', 'adults', 'children'));
        } else {
            return redirect()->back()->withErrors('No data matched your seach. Please refresh and try again.');
        }
    }

    public function store(Request $request)
    {
        $hotel = $this->hotel->where('tbo_code', $request->HotelCode)->first();
        DB::beginTransaction();
        $booking = $this->booking->create([
            "user_id" => auth()->user()->id,
            'hotel_id' => $hotel->id,
            "tbocode" => $request->HotelCode,
            "ref_no" => $this->booking->getref(),
            "bookingcode" => $request->BookingCode,
            "roomname" => $request->RoomName,
            "inclusion" => $request->Inclusion,
            "no_of_adults" => $request->NoOfAdults,
            "no_of_children" => $request->NoOfChildren,
            "email" => $request->EmailId,
            "phone" => $request->PhoneNumber,
            "checkin" => $request->CheckIn,
            "checkout" => $request->CheckOut,
            "status" => 0,
        ]);
        $CardHolderAddress = $request["PaymentInfo"]["CardHolderAddress"];
        $payment = $this->payment->create([
            "booking_id" => $booking->id,
            'CardNumber' => $request["PaymentInfo"]["CardNumber"],
            'CvvNumber' => $request["PaymentInfo"]["CvvNumber"],
            'CardExpirationMonth' => $request["PaymentInfo"]["CardExpirationMonth"],
            'CardExpirationYear' => $request["PaymentInfo"]["CardExpirationYear"],
            'CardHolderFirstName' => $request["PaymentInfo"]["CardHolderFirstName"],
            'CardHolderlastName' => $request["PaymentInfo"]["CardHolderlastName"],
            'BillingCurrency' => $request["PaymentInfo"]["BillingCurrency"],
            'AddressLine1' => $CardHolderAddress["AddressLine1"],
            'AddressLine2' => $CardHolderAddress["AddressLine2"],
            'City' => $CardHolderAddress["City"],
            'PostalCode' => $CardHolderAddress["PostalCode"],
            'CountryCode' => $CardHolderAddress["CountryCode"],
            'DaysRate' => $request["DaysRate"],
            'DaysPrice' => $request["DaysPrice"],
            'TotalTax' => $request["TotalTax"],
            'ExtraGuestCharges' => $request["ExtraGuestCharges"],
            'BillingAmount' => $request["BillingAmount"],
        ]);

        DB::commit();
        // $data = [
        //     "BookingCode" => $request->BookingCode,
        //     "CustomerDetails" => $request->CustomerDetails,
        //     "PaymentInfo" => $request["PaymentInfo"],
        //     "ClientReferenceId" => auth()->user()->ref_no,
        //     "BookingReferenceId" => $booking->ref_no,
        //     "TotalFare" => $request->TotalFare,
        //     "EmailId" => $request->EmailId,
        //     "PhoneNumber" => $request->PhoneNumber,
        //     "BookingType" => "Voucher",
        //     "PaymentMode" => "Limit",
        // ];

        // $data = [
        //     "BookingCode" => $request->BookingCode, "
        //     CustomerDetails" => [
        //         [
        //             "CustomerNames" => [
        //                 [
        //                     "Title" => "Mr", "FirstName" => "Shubham", "LastName" => "Gupta", "Type" => 'Adult'
        //                 ], [
        //                     "Title" => "Mr", "FirstName" => "Kunal", "LastName" => "Agrawal", "Type" => 'Child'
        //                 ]
        //             ]
        //         ]
        //     ],
        //     "ClientReferenceId" => "1626158614415-92957459",
        //     "BookingReferenceId" => "AVw12qw3218",
        //     "TotalFare" => 85.82,
        //     "EmailId" => "apisupport@tboholidays.com",
        //     "PhoneNumber" => "918448780621",
        //     "BookingType" => 'Voucher',
        //     "PaymentMode" => 'Limit',
        //     "PaymentInfo" => [
        //         "CvvNumber" => "123",
        //         "CardNumber" => "0123456789101112",
        //         "CardExpirationMonth" => "04",
        //         "CardExpirationYear" => "2022",
        //         "CardHolderFirstName" => "Dummy",
        //         "CardHolderlastName" => "Dummy",
        //         "BillingAmount" => 61.93,
        //         "BillingCurrency" => "GBP",
        //         "CardHolderAddress" => [
        //             "AddressLine1" => "Dummy",
        //             "AddressLine2" => "Dummy",
        //             "City" => "Dummy",
        //             "PostalCode" => "110059",
        //             "CountryCode" => "AE"
        //         ]
        //     ]

        // ];

        // $data = [
        //     "BookingCode" => $request->BookingCode,
        //     "CustomerDetails" => [
        //         [
        //             "CustomerNames" => [
        //                 [
        //                     "Title" => "Dr",
        //                     "FirstName" => "TestGuest",
        //                     "LastName" => "One",
        //                     "Type" => "Adult"
        //                 ]
        //             ]
        //         ]
        //     ],
        //     "ClientReferenceId" => "20220232312404-097445232",
        //     "TotalFare" => 878.71,
        //     "EmailId" => "himanshu.kumawat@tbo.com"
        // ];

        $data = [
            "BookingCode" => $request->BookingCode,
            "CustomerDetails" => $request->CustomerDetails,
            // "PaymentInfo" => $request["PaymentInfo"],
            "ClientReferenceId" => auth()->user()->ref_no,
            "BookingReferenceId" => $booking->ref_no,
            "TotalFare" => $request->TotalFare,
            "EmailId" => $request->EmailId,
            // "PhoneNumber" => $request->PhoneNumber,
            // "BookingType" => "Voucher",
            // "PaymentMode" => "Limit",
        ];
        // return $data;
        // $detail = ["BookingReferenceId" => "1688726644Us173", "PaymentMode" => "Limit"];

        // return $data;
        // $result = $this->service::bookingdetails($detail);
        $result = $this->service::book($data);
        // return json_encode($result);
        // return $result;
        if ($result["Status"]["Code"] == 200) {
            $booking->confimationnumber = $result["ConfirmationNumber"];
            $booking->status = 'successful';
            $booking->update();
            $message = $result["Status"]["Description"];
        } else {
            $status = "error";
            $message = $result["Status"]["Description"];
        }
        return json_encode(["status" => $status, 'message' => $message]);
    }


    public function show($id)
    {
        //
    }
    //     {
    //     "BookingCode": "1005552!TB!2!TB!649ad59a-b6b3-4874-82b2-29d684127123",
    //     "CustomerDetails": [
    //         {
    //             "CustomerNames": [
    //                 {
    //                     "Title": "Mr",
    //                     "FirstName": "Leilani",
    //                     "LastName": "Wright",
    //                     "Type": "Adult"
    //                 },
    //                 {
    //                     "Title": "Ms",
    //                     "FirstName": "Reuben",
    //                     "LastName": "Mckay",
    //                     "Type": "Adult"
    //                 }
    //             ]
    //         }
    //     ],
    //     "HotelCode": "1005552",
    //     "TotalFare": "1,818.36",
    //     "EmailId": "goma@mailinator.com",
    //     "PhoneNumber": "+11919151946",
    //     "PaymentInfo": {
    //         "CvvNumber": "675",
    //         "CardNumber": "868445467899843",
    //         "CardExpirationMonth": "2",
    //         "CardExpirationYear": "2026",
    //         "CardHolderFirstName": "Iona",
    //         "CardHolderlastName": "Walker",
    //         "BillingAmount": "2,536.30",
    //         "BillingCurrency": "USD",
    //         "CardHolderAddress": {
    //             "AddressLine1": "98 Green Second Avenue",
    //             "AddressLine2": "Iusto culpa volupta",
    //             "City": "Facere eu eiusmod do",
    //             "PostalCode": "Velit quae mollit d",
    //             "CountryCode": "WS"
    //         }
    //     },
    //     "DaysRate": "179.49 X +4 days",
    //     "DaysPrice": "717.94",
    //     "TotalTax": "0.00",
    //     "ExtraGuestCharges": "0.00",
    //     "CheckIn": "2023-06-30",
    //     "CheckOut": "2023-07-04",
    //     "NoOfAdults": "2",
    //     "NoOfChildren": "0"
    // }
    // {
    //     "BookingCode": "1005552!TB!2!TB!649ad59a-b6b3-4874-82b2-29d684127123",
    //     "CustomerDetails": [
    //         {
    //             "CustomerNames": [
    //                 {
    //                     "Title": "Mr",
    //                     "FirstName": "Leilani",
    //                     "LastName": "Wright",
    //                     "Type": "Adult"
    //                 },
    //                 {
    //                     "Title": "Ms",
    //                     "FirstName": "Reuben",
    //                     "LastName": "Mckay",
    //                     "Type": "Adult"
    //                 }
    //             ]
    //         }
    //     ],
    //     "PaymentInfo": {
    //         "CvvNumber": "675",
    //         "CardNumber": "868445467899843",
    //         "CardExpirationMonth": "2",
    //         "CardExpirationYear": "2026",
    //         "CardHolderFirstName": "Iona",
    //         "CardHolderlastName": "Walker",
    //         "BillingAmount": "2,536.30",
    //         "BillingCurrency": "USD",
    //         "CardHolderAddress": {
    //             "AddressLine1": "98 Green Second Avenue",
    //             "AddressLine2": "Iusto culpa volupta",
    //             "City": "Facere eu eiusmod do",
    //             "PostalCode": "Velit quae mollit d",
    //             "CountryCode": "WS"
    //         }
    //     },
    //     "ClientReferenceId": "1687538698-10",
    //     "BookingReferenceId": "1687582767-29",
    //     "TotalFare": "1,818.36",
    //     "EmailId": "goma@mailinator.com",
    //     "PhoneNumber": "+11919151946",
    //     "BookingType": "Voucher",
    //     "PaymentMode": "Limit"
    // }

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
