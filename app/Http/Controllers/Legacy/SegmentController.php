<?php

namespace App\Http\Controllers\legacy;

use App\Models\Segment;

class SegmentController extends Controller
{
    public function getSegmentsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/segments" ;
        $segments = $api->getApiData($urlApi)['segments'];
        foreach($segments as $segmentItem){
            $segment = new Segment();
            $segment->code = $segmentItem['code'];
            $segment->description = (array_key_exists('description', $segmentItem) ? $segmentItem['description']['content'] : null);
            $segment->save();
        }
    }
}
