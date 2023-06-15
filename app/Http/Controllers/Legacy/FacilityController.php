<?php

namespace App\Http\Controllers\legacy;

use App\Http\Controllers\Controller;
use App\Models\Facility;

class FacilityController extends Controller
{
    //fonction permettant d'enregistrer les données des facilities
    public function setFacilitiesData($foreignTable,$foreignId, $facilities){
        if(!empty($facilities) && $facilities != null){
            foreach($facilities as $facilityItem){
                $facility = new Facility();
                $facility->foreign_table = $foreignTable;
                $facility->foreign_id = $foreignId;
                $facility->ageFrom = (array_key_exists('ageFrom',$facilityItem) ? $facilityItem['ageFrom'] : null);
                $facility->amount = (array_key_exists('amount',$facilityItem) ? $facilityItem['amount'] : null);
                $facility->applicationType = (array_key_exists('applicationType',$facilityItem) ? $facilityItem['applicationType'] : null);
                $facility->currency = (array_key_exists('currency',$facilityItem) ? $facilityItem['currency'] : null);
                $facility->dateFrom = (array_key_exists('dateFrom',$facilityItem) ? $facilityItem['dateFrom'] : null);
                $facility->dateTo = (array_key_exists('dateTo',$facilityItem) ? $facilityItem['dateTo'] : null);
                $facility->description = (array_key_exists('description',$facilityItem) ? $facilityItem['description']['content'] : null);
                $facility->distance = (array_key_exists('distance',$facilityItem) ? $facilityItem['distance'] : null);
                $facility->facilityCode = (array_key_exists('facilityCode',$facilityItem) ? $facilityItem['facilityCode'] : null);
                $facility->facilityGroupCode = (array_key_exists('facilityGroupCode',$facilityItem) ? $facilityItem['facilityGroupCode'] : null);
                $facility->facilityName = (array_key_exists('facilityName',$facilityItem) ? $facilityItem['facilityName'] : null);
                $facility->indFee = (array_key_exists('indFee',$facilityItem) ? $facilityItem['indFee'] : null);
                $facility->indLogic = (array_key_exists('indLogic',$facilityItem) ? $facilityItem['indLogic'] : null);
                $facility->indYesOrNo = (array_key_exists('indYesOrNo',$facilityItem) ? $facilityItem['indYesOrNo'] : null);
                $facility->number = (array_key_exists('number',$facilityItem) ? $facilityItem['number'] : null);
                $facility->order = (array_key_exists('order',$facilityItem) ? $facilityItem['order'] : null);
                $facility->timeFrom = (array_key_exists('timeFrom',$facilityItem) ? $facilityItem['timeFrom'] : null);
                $facility->timeTo = (array_key_exists('timeTo',$facilityItem) ? $facilityItem['timeTo'] : null);
                $facility->voucher = (array_key_exists('voucher',$facilityItem) ? $facilityItem['voucher'] : null);
                $facility->save();
            }
        }
    }

}
