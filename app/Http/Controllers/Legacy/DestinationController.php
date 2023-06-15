<?php

namespace App\Http\Controllers\legacy;

use App\Models\Destination;

class DestinationController extends Controller
{
    public function getDestinationsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/locations/destinations" ;
        $destinations = $api->getApiData($urlApi);
        foreach($destinations['destinations'] as $destinationItem){
            $destination = new Destination();
            $destination->code = $destinationItem['code'];
            $destination->countryCode = (array_key_exists('countryCode',$destinationItem) ? $destinationItem['countryCode'] : null);
            $destination->isoCode = (array_key_exists('isoCode',$destinationItem) ? $destinationItem['isoCode'] : null);
            $destination->name = (array_key_exists('name',$destinationItem) ? $destinationItem['name']['content'] : null);
            $destination->save();
            $idDestination = $destination->id;
            //GroupZones
            $groupZones = (array_key_exists('groupZones',$destinationItem) ? $destinationItem['groupZones'] : null);
            $groupZoneController = new GroupZoneController();
            $groupZoneController->getGroupZonesData($idDestination,$groupZones);
            //Zones
            $zones = (array_key_exists('zones',$destinationItem) ? $destinationItem['zones'] : null);
            $zoneController = new ZoneController();
            $zoneController->getZonesData($idDestination , $zones);
        }
    }
}
