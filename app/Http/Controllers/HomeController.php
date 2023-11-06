<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->country = new Country();
        $this->booking = new Booking();
        $this->user = new User();

        $this->middleware('auth')->except('countries', 'index','country');
    }

    public function index()
    {
        return view('home');
    }

    public function countries()
    {
        $countries = $this->country->get();
        return json_encode($countries);
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function dashboard()
    {
        $bookingquery = $this->booking->query();
        if (auth()->user()->role !== "admin") {
            $bookingquery->where('user_id', auth()->id());
        }
        $hotelscount = Hotel::count();
        $bookingscount = $bookingquery->count();
        $activebookings = $bookingquery->where('checkout', '>=', date('Y-m-d'))->count();
        $bookings = $bookingquery->with('hotel')->latest()->paginate(10);
        // return $bookings;
        $userscount = $this->user->count();
        $userswithbookingscount  = $this->user->whereHas('bookings')->count();
        if (auth()->user()->role === "admin") {
            return view('dashboard', compact('bookings', 'activebookings', 'bookingscount', 'hotelscount', 'bookings', 'userscount', 'userswithbookingscount'));
        } else {
            return view('users.index', compact('bookings', 'activebookings', 'bookingscount', 'hotelscount', 'bookings', 'userscount', 'userswithbookingscount'));
        }
    }

    public function country(Request $request, $code=null) {
        if (!is_null($code)) {
            $country = Country::where('code', $code)->first();
        }else {
            $ip = $request->ip();
            $ip = '25.180.244.72';
            $accessKey = '752ab256508e4e'; // Get your access key from ipinfo.io
            $apiURL = curl_init("http://ipinfo.io/{$ip}/json?token={$accessKey}");
            $response = curl_exec($apiURL);
            $startIndex = strpos($response, '{');
            $endIndex = strrpos($response, '}') + 1;
            $jsonString = substr($response, $startIndex, $endIndex - $startIndex);
            $data = json_decode($jsonString, true);
            $country = Country::where('code',$data->code)->first();
        }
        session()->put("country", $country);
        return json_encode($country);
    }
}
