<?php

namespace App\Http\Controllers\legacy;

use App\Models\Hotel;

class HotelListController extends Controller
{
    public function searchResult(){
        return view('hotel.list
        ', [
            'hotel' => Hotel::all()
        ]);
    }
}
