<?php

namespace App\Http\Controllers\legacy;

use App\Models\GroupZone;

class GroupZoneController extends Controller
{
    public function getGroupZonesData($idDestination, $groupZones){
        if(!empty($groupZones)){
            foreach($groupZones as $groupZoneItem){
                $groupZone = new GroupZone();
                $groupZone->destination_id = $idDestination;
                $groupZone->groupZoneCode = (array_key_exists('groupZoneCode',$groupZoneItem) ? $groupZoneItem['groupZoneCode'] : null);
                $groupZone->name = (array_key_exists('name',$groupZoneItem) ? $groupZoneItem['name']['content'] : null);
                $zones = (array_key_exists('zones',$groupZoneItem) ? $groupZoneItem['zones'] : null);
                if(!empty($zones))
                    $groupZone->zones = implode(',',$zones);
                $groupZone->save();
            }
        }
    }
}
