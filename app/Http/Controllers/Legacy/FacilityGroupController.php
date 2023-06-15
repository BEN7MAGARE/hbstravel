<?php

namespace App\Http\Controllers\legacy;

use App\Models\FacilityGroup;

class FacilityGroupController extends Controller
{
    public function getFacilityGroupsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/facilitygroups" ;
        $facilityGroups = $api->getApiData($urlApi)['facilityGroups'];
        foreach($facilityGroups as $facilityGroupItem){
            $facilityGroup = new FacilityGroup();
            $facilityGroup->code = $facilityGroupItem['code'];
            $facilityGroup->description = (array_key_exists('description',$facilityGroupItem) ? $facilityGroupItem['description']['content'] : null);
            $facilityGroup->save();
        }
    }
}
