<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use App\Models\Accommodation;
use App\Models\Category;
use App\Models\Chain;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Destination;
use App\Models\GroupCategory;
use App\Models\Hotel;
use App\Models\Image;
use App\Services\TboService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HotelController extends Controller
{

    public function __construct()
    {
        $this->hotel = new Hotel();
        $this->category = new Category();
        $this->destination = new Destination();
        $this->country = new Country();
        // $this->middleware('auth')->except('countries', 'index','filter');
    }

    public function index()
    {
        $countries = Country::all();
        return view('home', compact('countries'));
    }

    public function create()
    {
        return view('hotel.create');
    }

    public function getCategories()
    {
        $categories = $this->category->get();

        return json_encode($categories);
    }

    public function getCategoryGroups()
    {
        $groups = GroupCategory::get();
        return json_encode($groups);
    }

    public function destinations($country_code = null)
    {
        $query = Destination::query();
        if (!is_null($country_code)) {
            $query->where('countryCode', $country_code);
        }
        $destinations = $query->get();

        return json_encode($destinations);
    }

    public function chains()
    {
        $chains = Chain::get();
        return json_encode($chains);
    }

    public function accommodations()
    {
        $accommodations = Accommodation::get();
        return json_encode($accommodations);
    }

    public function currencies()
    {
        $currencies = Currency::get();
        return json_encode($currencies);
    }

    public function store(HotelRequest $request)
    {

        $validated = $request->validated();
        $hotel = $this->hotel->create($validated);
        return json_encode(['status' => 'success', 'message' => 'Hotel added successfully']);
    }

    public function topDestinations()
    {
        $results = DB::table('destinations')
            ->select('id', 'code', 'countryCode', 'isoCode', 'name')
            ->selectSub(function ($query) {
                $query->from('hotels')
                    ->whereColumn('destination_code', 'destinations.code')
                    ->selectRaw('COUNT(*)');
            }, 'hotel_count')
            ->orderBy('hotel_count', 'DESC')
            ->limit(20)
            ->get();

        return json_encode($results);
    }

    public function filterSearch(Request $request)
    {
        $term = $request->term;
        $countries = $this->country->where('name', 'like', '%' . $term . '%')->inRandomOrder()->limit(10)->select('id', 'iso', 'name')->get();
        $data = [];
        if (count($countries) > 1) {
            foreach ($countries as $key => $value) {
                $hotels = $this->hotel->where('country_code', $value->iso)->inRandomOrder()->limit(10)->select('id', 'name', 'city', 'address')->get();
                if (count($hotels) > 0) {
                    array_push($data, ['country' => $value, 'hotels' => $hotels]);
                }
            }
        }
        if (count($countries) === 1) {
            $value = $countries[0];
            $hotels = $this->hotel->where('country_code', $value->iso)->inRandomOrder()->limit(10)->select('id', 'name', 'city', 'address')->get();
            if (count($hotels) > 0) {
                array_push($data, ['country' => $value, 'hotels' => $hotels]);
            }
        }
        if (count($countries) == 0) {
            $hotels = $this->hotel->where('name', 'like', '%' . $term . '%')->orWhere('city', 'like', '%' . $term . '%')->inRandomOrder()->limit(10)->select('id', 'name', 'city', 'address')->get();
            if (count($hotels) > 0) {
                array_push($data, $hotels);
            }
        }
        return json_encode($data);
    }

    public function search(Request $request)
    {
        $country = $this->country->where('iso', $request->country_code)->first();
        $hotels = $this->hotel->where('country_code', $request->country_code)->paginate(20);
        $hotels->appends(request()->query());
        $title = "Hotels in " . $country->name;
        return view('hotel.list', compact('title', 'hotels', 'country'));
    }


    public function defaultSearchOptions()
    {
        $data = $this->hotel
            ->select('country_code', 'city')
            ->selectRaw('COUNT(*) AS hotelcount')
            ->groupBy('country_code', 'city')
            ->orderBy('hotelcount', 'desc')
            ->limit(10)
            ->get();

        $data = $data->map(function ($item) {
            return [
                'country_code' => $item->country_code,
                'country' => $this->country->where('iso', $item->country_code)->first()->name,
                'city' => $item->city,
                'hotelcount' => $item->hotelcount,
            ];
        });
        return json_encode($data);
    }


    public function getHotelsByCity($city)
    {
        $hotels = $this->hotel->where('city', 'like', '%' . $city . '%')->paginate(20);
        $title = "Hotels in " . $city;
        $country = $this->country->where('iso', $hotels[0]->country_code)->first();
        return view('hotel.list', compact('hotels', 'title', 'country'));
    }

    public function getHotelsByCountryCity($country, $city)
    {
        $hotels = $this->hotel->where('country_code', $country)->where('city', $city)->get();
        return view('hotel.list', compact('hotels'));
    }

    public function show(int $id, TboService $service)
    {
        // return view('hotel.details');

        $hotel = Hotel::findOrFail($id);
        $searchParams = session()->get('search');
        if (is_null($searchParams))
            return redirect()->back()->with('errors', 'No rooms set for your search');

        $searchResult = $service::search(
            [$hotel['tbo_code']],
            $searchParams['checkIn'],
            $searchParams['checkOut'],
            $searchParams['rooms']
        );

        $hotelDetails = $service::getHotelDetails($hotel->tbo_code);

        $hotelRoomsDetails = array_values(array_filter(array_map(
            function ($hotelRooms) use ($hotel) {
                if (intval($hotelRooms['HotelCode']) == $hotel->tbo_code)
                    return $hotelRooms;
            },
            $searchResult["HotelResult"]
        )))[0];
        $hotelImages = $hotelDetails['HotelDetails'][0]['Images'];
        // $hotelImages = array_values(array_filter(array_map(
        //     function ($image) {
        //         if (@getimagesize($image))
        //             return $image;
        //     },
        //     $hotelImages
        // )));
        // dd($hotelRoomsDetails["Rooms"]);
        $details = $hotelDetails['HotelDetails'][0];
        $hotelinfo = $searchResult["HotelResult"];
        $hotel = [
            'id' => $hotel->id,
            'tbo_code' => $details['HotelCode'],
            'name' => $details["HotelName"],
            'currency' => $hotelinfo[0]['Currency'],
            'description' => $details['Description'],
            'rooms' => $hotelRoomsDetails["Rooms"],
            'rating' => $details['HotelRating'],
            'facilities' =>  $details['HotelFacilities'],
            'images' => $hotelImages,
            'attractions' => isset($details["Attractions"]) ? $details["Attractions"] : [],
            'address' => $details["Address"],
            'pincode' => $details["PinCode"],
            'cityid' => $details["CityId"],
            'countryname' => $details["CountryName"],
            'phonenumber' => $details["PhoneNumber"],
            'faxnumber' => $details["FaxNumber"],
            'map' => $details["Map"],
            'hotelrating' => $details["HotelRating"],
            'cityname' => $details["CityName"],
            'countrycode' => $details["CountryCode"],
            'checkin' => $details["CheckInTime"],
            'checkout' => $details["CheckOutTime"],
        ];

        $title = $hotel["name"];

        return view('hotel.detail', compact('hotel', 'title'));
    }

    public function details(TboService $service)
    {
        $hotel = Hotel::findOrFail(request()->hotel_id);
        $searchParams = session()->get('search');
        $searchResult = session()->get('searchResult');
        if (is_null($searchResult)) {
            $searchResult = $service::search(
                [$hotel->tbo_code],
                request()->checkIn,
                request()->checkOut,
                $searchParams['rooms']
            );
        }

        $hotelDetails = $service::getHotelDetails($hotel->tbo_code);
        $hotelRoomsDetails = array_values(array_filter(array_map(
            function ($hotelRooms) use ($hotel) {
                if (intval($hotelRooms['HotelCode']) == $hotel->tbo_code)
                    return $hotelRooms;
            },
            $searchResult["HotelResult"]
        )))[0];

        $isNewlyRenovated = false;
        $hasFreeWifi = in_array(
            'Free WiFi',
            $hotelDetails['HotelDetails'][0]['HotelFacilities']
        );
        $rooms = $hotelRoomsDetails['Rooms'];
        $hotelRating = $hotelDetails['HotelDetails'][0]['HotelRating'];
        $hotelFacilities = $hotelDetails['HotelDetails'][0]['HotelFacilities'];
        $hotelImages = $hotelDetails['HotelDetails'][0]['Images'];

        $hotelImages = array_values(array_filter(array_map(
            function ($image) {
                if (@getimagesize($image))
                    return $image;
            },
            $hotelImages
        )));

        return view(
            'hotel.show',
            compact(
                'hotel',
                'isNewlyRenovated',
                'hasFreeWifi',
                'rooms',
                'hotelRating',
                'hotelFacilities',
                'hotelImages'
            )
        );
    }

    public function searchApi(TboService $service)
    {

        $rooms = [
            ...array_map(function ($index) {
                return [
                    "Adults" => request()->input('adults'),
                    "Children" => request()->input('children') ?? 0,
                    "ChildrenAges" => array_map(
                        fn ($childIndex) => 0,
                        range(1, request()->input('children' . $index) ?? 0)
                    )
                ];
            }, range(1, request()->roomsCount))
        ];
        $values = ["checkin" => request()->checkIn, "checkout" => request()->checkOut, 'adults' => request()->input('adults'), 'children' => request()->input('children')];

        session()->put('search', [
            'country' => request()->countries,
            'checkIn' => request()->checkIn,
            'checkOut' => request()->checkOut,
            'rooms' => $rooms,
        ]);

        $localhotels = Hotel::where('country_code', request()->country_code)->select('id', 'tbo_code', 'name', 'city', 'address')->get();
        $hotelcodes = $localhotels->pluck("tbo_code")->chunk(100)->first()->toArray();

        $result = $service::search(
            $hotelcodes,
            request()->checkIn,
            request()->checkOut,
            $rooms
        );

        if ($result["Status"]["Code"] !== 200) {
            return redirect()->back()->withErrors($result["Status"]["Description"]);
        }
        // session()->put('searchResult', $result);
        // $results = collect($result['HotelResult']);
        // return $results->count();
        $data = [];
        $hotels = $result['HotelResult'];
        if (count($hotels) > 0) {
            foreach ($hotels as $key => $value) {
                $hotel = $localhotels->where('tbo_code', $value["HotelCode"])->first();
                $room = $value["Rooms"][0];
                $hotelDetails = $service::getHotelDetails($value['HotelCode']);
                if ($hotelDetails["Status"]["Code"] == 500) {
                    $hotelRating = "";
                }else {
                    $hotelRating = $hotelDetails['HotelDetails'][0]['HotelRating'];
                }
                $object = ['hotel' => $hotel, 'image' => $hotel?->images->first()?->path, 'currency' => $value["Currency"], 'rating' => $hotelRating, 'starting' => ["room" => $room["Name"][0], 'features' => $room["Inclusion"], 'price' => $room["DayRates"][0][0]["BasePrice"], 'fare' => $room["TotalFare"], 'tax' => $room["TotalTax"]]];
                array_push($data, $object);
            }
        }


        // if (!isset($result['HotelResult']))
        //     return redirect()->back()->with('error', 'No hotel data was found');

        // session()->put('searchResult', $data);
        // return $result['HotelResult'];
        $country = Country::where('iso', request()->country_code)->first();
        $title = "Hotels in " . $country->name;


        // $hotels = collect($result['HotelResult'])
        //     ->map(function ($hotel) use ($country, $service, $localhotels) {
        //         $selectedHotel = $localhotels->where('tbo_code', $hotel["HotelCode"])->first();

        //         if (!$selectedHotel) return null;

        //         $hotelDetails = $service::getHotelDetails($hotel['HotelCode']);
        //         $hotelRating = $hotelDetails['HotelDetails'][0]['HotelRating'];
        //         $room = $hotel["Rooms"][0];
        //         return [
        //             'hotel' => $selectedHotel,
        //             'image' => $selectedHotel?->images->first()?->path,
        //             'currency' => $hotel["Currency"],
        //             'rating' => $hotelRating,
        //             'starting' => [
        //                 "room" => $room["Name"][0],
        //                 'features' => $room["Inclusion"],
        //                 'price' => $room["DayRates"][0][0]["BasePrice"],
        //                 'fare' => $room["TotalFare"],
        //                 'tax' => $room["TotalTax"]]
        //             ];
        //     })
        //     ->filter(fn ($hotel) => !is_null($hotel))
        //     ->toArray();
        return view('hotel.list', ['title' => $title, 'country' => $country, 'hotels' => $data, 'hotelscount' => $localhotels->count(), 'total' => count($result['HotelResult']), 'values' => $values]);
    }
}
