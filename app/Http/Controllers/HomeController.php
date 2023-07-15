<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->country = new Country();
        $this->booking = new Booking();
        $this->user = new User();

        $this->middleware('auth')->except('countries', 'index');
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
}
