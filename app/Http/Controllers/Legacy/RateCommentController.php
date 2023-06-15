<?php

namespace App\Http\Controllers\legacy;

use App\Models\RateComment;

class RateCommentController extends Controller
{
    public function getRateCommentls(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/ratecomments" ;
        $rateComments = $api->getApiData($urlApi);
        foreach($rateComments as $rateCommentItem){
            $rateComment = new RateComment();
            $rateComment->dateEnd = $rateCommentItem['dateEnd'];
            $rateComment->dateStart = $rateCommentItem['dateStart'];
            $rateComment->description = (array_key_exists('description' , $rateCommentItem) ? $rateCommentItem['description'] : null);
            $rateComment->save();
        }
    }
}
