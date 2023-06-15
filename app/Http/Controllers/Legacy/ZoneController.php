<?php

namespace App\Http\Controllers\legacy;

use App\Models\Zone;

class ZoneController extends Controller
{
    public function getZonesData($idDestination, $zones){
        if(!empty($zones)){
            foreach($zones as $zoneItem){
                $zone = new Zone();
                $zone->destination_id = $idDestination;
                $zone->description = (array_key_exists('description',$zoneItem) ? $zoneItem['description']['content'] : null);
                $zone->name = (array_key_exists('name',$zoneItem) ? $zoneItem['name'] : null);
                $zone->zoneCode = (array_key_exists('zoneCode',$zoneItem) ? $zoneItem['zoneCode'] : null);
                $zone->save();
            }
        }
    }
}
