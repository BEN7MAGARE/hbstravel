<?php

namespace App\Http\Controllers\legacy;

use App\Http\Controllers\Controller;
use App\Models\FacilityTypology;

class FacilityTypologyController extends Controller
{
    public function getFacilityTypologiesData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/facilitytypologies" ;
        $facilityTypologies = $api->getApiData($urlApi)['facilityTypologies'];
        foreach($facilityTypologies as $facilityTypologyItem){
            $facilityTypology = new FacilityTypology();
            $facilityTypology->code = $facilityTypologyItem['code'];
            $facilityTypology->ageFromFlag = (array_key_exists('ageFromFlag',$facilityTypologyItem) ? $facilityTypologyItem['ageFromFlag'] : null);
            $facilityTypology->ageToFlag = (array_key_exists('ageToFlag',$facilityTypologyItem) ? $facilityTypologyItem['ageToFlag'] : null);
            $facilityTypology->amountFlag = (array_key_exists('amountFlag',$facilityTypologyItem) ? $facilityTypologyItem['amountFlag'] : null);
            $facilityTypology->appTypeFlag = (array_key_exists('appTypeFlag',$facilityTypologyItem) ? $facilityTypologyItem['appTypeFlag'] : null);
            $facilityTypology->currencyFlag = (array_key_exists('currencyFlag',$facilityTypologyItem) ? $facilityTypologyItem['currencyFlag'] : null);
            $facilityTypology->dateFromFlag = (array_key_exists('dateFromFlag',$facilityTypologyItem) ? $facilityTypologyItem['dateFromFlag'] : null);
            $facilityTypology->dateToFlag = (array_key_exists('dateToFlag',$facilityTypologyItem) ? $facilityTypologyItem['dateToFlag'] : null);
            $facilityTypology->distanceFlag = (array_key_exists('distanceFlag',$facilityTypologyItem) ? $facilityTypologyItem['distanceFlag'] : null);
            $facilityTypology->feeFlag = (array_key_exists('feeFlag',$facilityTypologyItem) ? $facilityTypologyItem['feeFlag'] : null);
            $facilityTypology->indYesOrNoFlag = (array_key_exists('indYesOrNoFlag',$facilityTypologyItem) ? $facilityTypologyItem['indYesOrNoFlag'] : null);
            $facilityTypology->logicFlag = (array_key_exists('logicFlag',$facilityTypologyItem) ? $facilityTypologyItem['logicFlag'] : null);
            $facilityTypology->numberFlag = (array_key_exists('numberFlag',$facilityTypologyItem) ? $facilityTypologyItem['numberFlag'] : null);
            $facilityTypology->textFlag = (array_key_exists('textFlag',$facilityTypologyItem) ? $facilityTypologyItem['textFlag'] : null);
            $facilityTypology->timeFromFlag = (array_key_exists('timeFromFlag',$facilityTypologyItem) ? $facilityTypologyItem['timeFromFlag'] : null);
            $facilityTypology->timeToFlag = (array_key_exists('timeToFlag',$facilityTypologyItem) ? $facilityTypologyItem['timeToFlag'] : null);
            $facilityTypology->save();
        }
    }
}
