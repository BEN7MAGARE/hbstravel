<?php

namespace App\Http\Controllers\legacy;

use App\Models\RoomStay;

class RoomStayController extends Controller
{
    public function setRoomStaysData($idRoom , $roomStays, $facilityController){
        if(!empty($roomStays) && $roomStays != null){
            foreach($roomStays as $roomStayItem){
                $roomStay = new RoomStay();
                $roomStay->room_id = $idRoom;
                $roomStay->description = (array_key_exists('description',$roomStayItem) ? $roomStayItem['description'] : null);
                $roomStay->order = (array_key_exists('order',$roomStayItem) ? $roomStayItem['order'] : null);
                $roomStay->stayType = (array_key_exists('stayType',$roomStayItem) ? $roomStayItem['stayType'] : null);
                $roomStay->save();
                $roomStayId = $roomStay->id;

                //roomStaysFacilities
                $roomStayFacilities = (array_key_exists('roomStayFacilities',$roomStayItem) ? $roomStayItem['roomStayFacilities'] : null);
                $facilityController->setFacilitiesData("RoomStay", $roomStayId, $roomStayFacilities);
            }
        }
    }
}
