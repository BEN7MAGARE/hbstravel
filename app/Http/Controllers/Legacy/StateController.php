<?php

namespace App\Http\Controllers\legacy;

use App\Models\State;

class StateController extends Controller
{
    public function getStatesData($idCountry, $states){
        if(!empty($states)){
            foreach($states as $stateItem){
                $state = new State();
                $state->country_id = $idCountry;
                $state->code = $stateItem['code'];
                $state->name = (array_key_exists('name',$stateItem) ? $stateItem['name'] : null);
                $state->save();
            }
        }
    }
}
