<?php

namespace App\Http\Controllers\legacy;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Image;

class HotelController extends Controller
{

    public function getApiHotels(RoomController $roomController, FacilityController $facilityController, RoomStayController $roomStayController){
        $api = new APIController();
        $urlApi = 'https://api.test.hotelbeds.com/hotel-content-api/1.0/hotels?fields=all&language=ENG&from=100&to=1000&includeHotels=webOnly';
        $hotels = $api->getApiData($urlApi)['hotels'];

        foreach($hotels as $hotelItem){
            $hotel = new Hotel();
            $hotel->name = $hotelItem["name"]["content"];
            $hotel->description = $hotelItem['description']['content'];
            $hotel->country_code = $hotelItem['countryCode'];
            $hotel->state_code = $hotelItem['stateCode'];
            $hotel->destination_code = $hotelItem['destinationCode'];
            $hotel->zone_code = $hotelItem['zoneCode'];
            $hotel->longitude = $hotelItem['coordinates']['longitude'];
            $hotel->latitude = $hotelItem['coordinates']['latitude'];
            $hotel->category_code = $hotelItem['categoryCode'];
            $hotel->category_group_code = $hotelItem['categoryGroupCode'];
            $hotel->chain_code = (array_key_exists('chainCode',$hotelItem) ? $hotelItem['chainCode'] : null);
            $hotel->accommodation_type_code = $hotelItem['accommodationTypeCode'];
            $hotel->postal_code = $hotelItem['postalCode'];
            $hotel->city = $hotelItem['city']['content'];
            $hotel->email = array_key_exists('email',$hotelItem) ? $hotelItem['email'] : null;

            $hotel->save();
            $idHotel = $hotel->id;
            //Images
            $images = $hotelItem['images'];
            foreach($images as $imageItem){
                $image = new Image();
                $image->hotel_id = $idHotel;
                $image->imageTypeCode = $imageItem['imageTypeCode'];
                $image->path = $imageItem['path'];
                $image->room_code = (array_key_exists('roomCode',$imageItem) ? $imageItem['roomCode'] : null);
                $image->room_type = (array_key_exists('roomType',$imageItem) ? $imageItem['roomType'] : null);
                $image->characteristic_code = (array_key_exists('characteristicCode',$imageItem) ? $imageItem['characteristicCode'] : null);
                $image->order = $imageItem['order'];
                $image->visual_order = $imageItem['visualOrder'];

                $image->save();
            }
            //Facilities
            $hotelFacilities = $hotelItem['facilities'];
            $facilityController->setFacilitiesData("Hotel", $idHotel, $hotelFacilities);
            //Rooms
            $rooms = $hotelItem['rooms'];
            $roomController->setRoomsData($idHotel, $rooms, $facilityController, $roomStayController);

        }
    }
}
