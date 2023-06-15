<?php

namespace App\Http\Controllers\legacy;

use App\Models\Accommodation;

class AccommodationController extends Controller
{
    public function getAccommodationsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/accommodations" ;
        $accommodations = $api->getApiData($urlApi)['accommodations'];
        foreach($accommodations as $accommodationItem){
            $accommodation = new Accommodation();
            $accommodation->code = $accommodationItem['code'];
            $accommodation->typeDescription = (array_key_exists('typeDescription',$accommodationItem) ? $accommodationItem['typeDescription'] : null);
            $accommodation->typeMultiDescription = (array_key_exists('typeMultiDescription',$accommodationItem) ? $accommodationItem['typeMultiDescription']['content'] : null);

            $accommodation->save();
        }
    }
}
