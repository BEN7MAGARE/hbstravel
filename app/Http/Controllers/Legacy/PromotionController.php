<?php

namespace App\Http\Controllers\legacy;

use App\Models\Promotion;

class PromotionController extends Controller
{
    public function getPromotionsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/promotions" ;
        $promotions = $api->getApiData($urlApi)['promotions'];
        foreach($promotions as $promotionItem){
            $promotion = new Promotion();
            $promotion->code = $promotionItem['code'];
            $promotion->description = (array_key_exists('description',$promotionItem) ? $promotionItem['description']['content'] : null);
            $promotion->name = (array_key_exists('name',$promotionItem) ? $promotionItem['name']['content']: null);
            $promotion->save();
        }
    }
}
