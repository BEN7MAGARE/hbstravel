<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->country = new Country();
        $this->middleware('auth')->except('countries','index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
        return view('dashboard');
    }
}
