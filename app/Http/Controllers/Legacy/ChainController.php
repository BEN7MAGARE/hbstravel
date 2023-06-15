<?php

namespace App\Http\Controllers\legacy;

use App\Models\Chain;

class ChainController extends Controller
{
    public function getChainsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/chains" ;
        $chains = $api->getApiData($urlApi)['chains'];
        foreach($chains as $chainItem){
            $chain = new Chain();
            $chain->code = $chainItem['code'];
            $chain->description = (array_key_exists('description',$chainItem) ? $chainItem['description']['content'] : null);
            $chain->save();
        }
    }
}
