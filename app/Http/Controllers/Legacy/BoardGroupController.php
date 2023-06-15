<?php

namespace App\Http\Controllers\legacy;

use App\Models\BoardGroup;

class BoardGroupController extends Controller
{
    public function getBoardGroupsData(){
        $api = new APIController();
        $urlApi = "https://api.test.hotelbeds.com/hotel-content-api/1.0/types/boardgroups" ;
        $boardGroups = $api->getApiData($urlApi)['boardGroups'];
        foreach($boardGroups as $boardGroupItem){
            $boardGroup = new BoardGroup();
            $boardGroup->code = $boardGroupItem['code'];
            $boardGroup->description = (array_key_exists('description',$boardGroupItem) ? $boardGroupItem['description']['content'] : null);
            $boards = (array_key_exists('boards',$boardGroupItem) ? $boardGroupItem['boards'] : null);
            $boardGroup->boards = implode('|||',$boards);
            $boardGroup->save();
        }
    }
}
