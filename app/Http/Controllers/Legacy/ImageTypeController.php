<?php

namespace App\Http\Controllers\legacy;

use App\Models\ImageType;

class ImageTypeController extends Controller
{
    public function getImageTypesData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/imagetypes" ;
        $imageTypes = $api->getApiData($urlApi)['imageTypes'];
        foreach($imageTypes as $imageTypeItem){
            $imageType = new ImageType();
            $imageType->code = $imageTypeItem['code'];
            $imageType->description = (array_key_exists('description',$imageTypeItem) ? $imageTypeItem['description']['content'] : null);
            $imageType->save();
        }
    }
}
