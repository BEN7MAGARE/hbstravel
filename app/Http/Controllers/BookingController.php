<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Services\TboService;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public $service;
    public $hotel;
    function __construct()
    {
        $this->middleware('auth');
        $this->hotel = new Hotel();
        $this->service = new TboService();
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
        if (session()->has('search')) {
             $data = session("search");
        }
        $prebook = $this->service::prebook($code);
        if ($prebook["Status"]["Code"] === 200) {
            $hotel = $prebook["HotelResult"];
            $rooms = $hotel[0]["Rooms"];
            $Amenities = $rooms[0]['Amenities'];
            $hotelinfo = $this->hotel->where('tbo_code',$hotel[0]["HotelCode"])->first();
            return view('hotel.book', compact('hotel', 'hotelinfo', 'rooms', 'Amenities', 'data'));
        }else {
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
        
        return $request;
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
