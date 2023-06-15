<?php

namespace App\Http\Controllers\legacy;

use App\Models\Classification;

class ClassificationController extends Controller
{
    public function getClassificationsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/classifications?fields=all&language=ENG&from=1&to=100&includeHotels=webOnly" ;
        $classifications = $api->getApiData($urlApi)['classifications'];
        foreach($classifications as $classificationItem){
            $classification = new Classification();
            $classification->code = $classificationItem['code'];
            $classification->description = (array_key_exists('description',$classificationItem) ? $classificationItem['description']['content'] : null);
            $classification->save();
        }
    }
}
