<?php

namespace App\Http\Controllers\legacy;

use App\Models\RateCommentDetail;

class RateCommentDetailController extends Controller
{
    public function getRateCommentDetails(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/ratecommentdetails?fields=all&language=ENG&from=1&to=100&includeHotels=webOnly" ;
        $rateCommentDetails = $api->getApiData($urlApi);
        foreach($rateCommentDetails as $rateCommentDetailItem){
            $rateCommentDetail = new RateCommentDetail();
            $rateCommentDetail->dateEnd = $rateCommentDetailItem['dateEnd'];
            $rateCommentDetail->dateStart = $rateCommentDetailItem['dateStart'];
            $rateCommentDetail->description = (array_key_exists('description' , $rateCommentDetailItem) ? $rateCommentDetailItem['description'] : null);
            $rateCommentDetail->save();
        }
    }
}
