<?php

namespace App\Http\Controllers\legacy;

use App\Http\Controllers\Controller;
use App\Models\Room;

class RoomController extends Controller
{
    public function setRoomData($idHotel,$rooms,$facilityController, $roomStayController){
        if(!empty($rooms)){
            foreach($rooms as $roomItem){
                $room = new Room();
                $room->hotel_id = $idHotel;
                $room->characteristicCode = (array_key_exists('characteristicCode',$roomItem) ? $roomItem['characteristicCode'] : null);
                $room->description = (array_key_exists('description',$roomItem) ? $roomItem['description'] : null);
                $room->roomCode = (array_key_exists('roomCode',$roomItem) ? $roomItem['roomCode'] : null);
                $room->roomType = (array_key_exists('roomType',$roomItem) ? $roomItem['roomType'] : null);
                $room->save();

                $idRoom = $room->id;
                //RoomFacilities
                $roomFacilities =(array_key_exists('roomFacilities',$roomItem) ? $roomItem['roomFacilities'] : null);
                $facilityController->setFacilitiesData("Room", $idRoom, $roomFacilities);

                //RoomStays
                $roomStays = (array_key_exists('roomStays',$roomItem) ? $roomItem['roomStays'] : null);
                $roomStayController->setRoomStaysData($idRoom, $roomStays, $facilityController);

            }
        }
    }
}
